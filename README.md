# Blog Community World!  [![Awesome](https://cdn.rawgit.com/sindresorhus/awesome/d7305f38d29fed78fa85652e3a63e154dd8e8829/media/badge.svg)](https://github.com/sindresorhus/awesome) <a name="awesome-frontend-resources"></a>


### Contents
* [About The Project](#about)
* [About Databases](#databases)
* [Technologies](#technologies)
* [About Admin Panel Operations](#admin-operations)
* [Customer Register and Sign-In](#register-sign-in)
* [Sports Articles Homepage](#sports-homepage)
* [A Sport Article Detail](#sports-detail)
* [Admin Sign-In Panel](#admin-sign-in)
* [Admin Panel Homepage](#admin-homepage)
* [Admin Panel Sports Articles General View](#admin-sports-general)
* [Admin Panel Add New Sports Articles](#admin-sports-add)
* [Admin Panel Update Sports Articles](#admin-sports-update)
* [Admin Panel Remove and Activ Operations For Sports Articles](#admin-asia-remove-activ)
* [Admin Panel - Show Members](#admin-members)

### About The Project <a name="about"></a>

- ##### This is a dynamic web application publishing new articles about daily topics, and also breaking news especially on the subjects of sports and culture.

- ##### Users can register and sign-in the application.

- ##### Breaking news are published by the admin.

- ##### Any news can be added, updated, deleted, and managed by admin panel based on database operations.

- ##### Users can read whatever they want, and search the topics they would like to read.

### About Databases <a name="databases"></a>
- ##### Database: customers --> table: customersinfo
##### All the records about the users of the application are kept here. Admin can see who registered the application to read new articles, using admin panel.

![pic](./assets/img-readme/customers-db.png)


- ##### Database: articles --> tables: sports, culture
##### All the records about new articles and blogs are kept here. Admin can add new article, update an existing one, delete, make pasive or aktive, using admin panel. And all these operations are provided from MySQL database.

![pic](./assets/img-readme/articles-db.png)

##### There is one-to-many relations between:  
- ##### teams: sports (provided by 'baslik')
- ##### countries: culture (provided by 'baslik')

### Technologies That Is Used <a name="technologies"></a>

- ##### The user interface of the project is designed, conceived and completed by HTML5 - CSS3 and Bootstrap. 

- ##### In order to make the application to gain dynamic attributes, PHP - PDO concept has been used. So that we can build the bridge between web application and our database system. The connection between the site and database has been provided by PHP - PDO and MySql technologies. So all the data is stored, kept and managed by MySql.

### About Admin Panel Operations <a name="admin-operations"></a>
##### All admin panel operations; 
- ##### Admin Homepage
- ##### Show Articles List
- ##### Add New Article
- ##### Update an Article That Exists
- ##### Remove an Article
- ##### Change Activity of an Article
- ##### See All Members 

##### All of this operations are provided by database functionalities which are described above. So the main purpose here is to make the web application dynamic so that the  owner of the app can easily manage all functions from admin panel. 

##### The inputs at the interface corresponds to the columns from the related table. The connection between the user interface and the database is provided by PHP-PDO and MySQL technologies.


### Customer Register and Sign-In <a name="register-sign-in"></a>
- ##### Users should reigster and sign-in in order to read articles. This sign-in / register operations is provided by user interface at the front-end and a database system at the back-end. 

- #### Register:

![pic](./assets/img-readme/register.png)

- #### Sign-In:

![pic](./assets/img-readme/sign-in.png)


### Sports Articles Homepage <a name="sports-homepage"></a>

![pic](./assets/img-readme/sports-homepage.png)


### A Sport Article Detail <a name="sports-detail"></a>

![pic](./assets/img-readme/sports-detail.png)

### Admin Sign-In Panel <a name="admin-sign-in"></a>

![pic](./assets/img-readme/admin-sign-in.png)

### Admin Panel Homepage <a name="admin-homepage"></a>

![pic](./assets/img-readme/admin-homepage.png)


### Admin Panel Sports Articles General View <a name="admin-sports-general"></a>

![pic](./assets/img-readme/admin-sports-general.png)

### Admin Panel Add New Sports Articles <a name="admin-sports-add"></a>

![pic](./assets/img-readme/admin-add-new-sports.png)

### Admin Panel Update Sports Articles <a name="admin-sports-update"></a>

![pic](./assets/img-readme/admin-update.png)

### Admin Panel Remove and Activ Operations For Sports Articles <a name="admin-asia-remove-activ"></a>

![pic](./assets/img-readme/admin-sports-general.png)


### Admin Panel - Show Members <a name="admin-members"></a>

![pic](./assets/img-readme/admin-members.png)