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
   
   ```
- these three tables are correspond to three models,the UserModel,the IndividualConditionModel
<br>
the FamilyConditionModel <br>
//均使用EloquentORM管理,简要关系如下
- family 与 individual一对多
##The design for the Routes and the Controllers
- The UserController(使用laravel内置验证系统)
- The FamilyController
	- public function create(Request $request){}
	- public function delete($id){}
	- public function edit(Request $request){}
	- public function show($id){}//一个家庭信息，外加成员简略信息如身份证号
	- public function search(Request $request){}
- The IndividualController//只允许在某个家庭下变动
	-	public function create(Request $request){}
	-	public function edit(Request $request){}//不可以变动家庭
	-   public function delete($id){}
	-   public function move(Request $request){}//唯一作用是移动,迁户口
	-   public function show($id){}//个人精确信息
	-   public function search(Request $request){}
<br>内部接口自由确定，至少包含一个show()的私有函数

##The View of the sites
- The welcome view(没有表单,uri是('/'))

- The login view(有一个登陆表单，参考laravel内置的，变量名要换成UserModel的对应部分，uri是('/login'))

- The home view(登陆后跳转,uri是('/home'))

- The individual search view(本身的uri是('/individual/search')，该uri通过get路由得到时是纯粹显示一个view,有一个表单，支持以身份证号搜索,提交的input名为'id',action={{url('/individual/search')}},method='POST',寻找到跳转到(redirect)到('/individual/show/{id}'),不然到('/failure'))

- The family search view(本身的uri是('/family/search')该uri通过get路由得到时是纯粹显示一个view,有一个表单，支持以身份证号搜索,提交的input名为'id',action={{url('/family/search')}},method='POST',寻找到跳转到(redirect)到('/family/show/{id}'),不然到('/failure')),

- The individual show view(uri为('/individual/show/{id}'),路由处理和上面一样需要传入一个数据$individual,使用blade模板，有个form，action={{url('/individual/show')}},method='POST',输入域和人的数据形式对应，还有一个'编辑'submit,只有按了'编辑'才允许编辑，另外还有一个'提交'submit按钮),family的与之相似。

- The failure view(访问('/failure')返回，return view('failure'))

- The success view(访问('/success')返回，return view('success'))

<br>
这些view有一个导航栏加一个显示内容部分这样的一个布局，都是要写成blade引擎文件blade.php<br>
只有在导航栏中才写链接



