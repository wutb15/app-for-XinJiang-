#Design of the project
##The design for the Mysql Database and the Models

- contains three tables:

   ```plain
   table users
   ('id' int unsigned not null auto_increment primary key,
    'username' varchar not null,
    'password' varchar not null
   )
   
   table individualconditions
   (
    'Idcardid' varchar(19) not null primary key//验证numeric，还有位数,
    'sex enum '('male','female'),
    'home_id' int  unsigned           
	'birthday' date
	'income' decimal
	foreign key(homeid) references 'homecondition''homeid'
   
   )
   
   table familyconditions
   (
    'home_id' int unsigned not null auto_increment primary key,
	'homename' varchar(60)//一户人家的称呼
	'homelocation' varchar
   )
	table orders
	(
		'id' int unsigned not null auto_increment primary key,
		'ordertype' enum('search','add','edit','delete')
		'user_id' int unsigned foreign key references 'users''user_id'
		'handleID' varchar//也为foreignkey
		//加上timestamp(created at)
	)
   
   ```
- these four tables are correspond to three models,the UserModel,the IndividualConditionModel
<br>
the FamilyConditionModel and the OrderModel<br>
//均使用EloquentORM管理,简要关系如下
- family 与 individual一对多
- user 与 order 一对多
##The design for the Routes and the Controllers
- The UserController(使用laravel内置验证系统)
- The HandleController//基类，只绑在post路由上
	- protected $handleID
	- public function handle(Request $request)//公用接口
    - 拓展类:
    	- SearchHandleController
    	- UpdateHandleController//更新一个人的数据
    	- AddHandleController//加入一个人的数据
    	- DeleteHandleController//删除一个人的数据
<br>内部接口自由确定，至少包含一个show()的私有函数

##The View of the sites
- The welcome view(没有表单,uri是('/'))
- The login view(有一个登陆表单，参考laravel内置的，变量名要换成UserModel的对应部分，uri是('/login'))
- The home view(登陆后跳转,uri是('/home'))
- The search view(本身的uri是('/search')，该uri通过get路由得到时是纯粹显示一个view,有一个表单，先只支持以身份证号搜索,提交的input名为'Idcardid',action={{url('/search')}},method='POST',寻找到跳转到(redirect)到('/show'),不然到('/failure'))
- The show view(uri为('/show'),路由处理和上面一样需要传入一个数据$data,使用blade模板，有个form，action={{url('/show')}},method='POST',输入域和人的数据形式对应，还有一个'编辑'submit,只有按了'编辑'才允许编辑，另外还有一个'提交'submit按钮)
- The failure view(访问('/failure')返回，return view('failure',$message))
- The success view(访问('/success')返回，return view('success',$message))

<br>
这些view有一个导航栏加一个显示内容部分这样的一个布局，都是要写成blade引擎文件blade.php<br>
只有在导航栏中才写链接



