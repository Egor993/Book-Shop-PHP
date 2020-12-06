
<!DOCTYPE html>

<html lang="ru" >
<head>
<title>Admin panel</title>
<link rel="stylesheet" type="text/css" href="/template/css/admin.css">



    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/static/admin/css/responsive.css">
    

<meta name="robots" content="NONE,NOARCHIVE">
</head>


<body class=" dashboard"
  data-admin-utc-offset="0">

<!-- Container -->
<div id="container">

    
    <!-- Header -->
    <div id="header">
        <div id="branding">
        
<h1 id="site-name"><a href="/admin/">Admin panel</a></h1>

        </div>
        
        
        <div id="user-tools">
            
                Добро пожаловать,
                <strong>admin</strong>.
            
            
                
                    <a href="/">Открыть сайт</a> /
                
                
                    
                    
                
                
                <a href="/admin/password_change/">Изменить пароль</a> /
                
                <a href="/admin/logout/">Выйти</a>
            
        </div>
        
        
        
    </div>
    <!-- END Header -->
    
    

    
        
    

    <!-- Content -->
    <div id="content" class="colMS">
        
        <h1>Администрирование сайта</h1>
        
<div id="content-main">


    
        <div class="app-main module">
        <table>
        <caption>
            <a href="/admin/main/" class="section" title="Модели в приложении Main">Main</a>
        </caption>
        
            <tr class="model-orders">
            
                <th scope="row"><a href="/admin/main/orders/">Orderss</a></th>
            

            
                <td><a href="/admin/main/orders/add/" class="addlink">Добавить</a></td>
            

            
                
                <td><a href="/admin/main/orders/" class="changelink">Изменить</a></td>
                
            
            </tr>
        
            <tr class="model-author">
            
                <th scope="row"><a href="/admin/main/author/">Авторы</a></th>
            

            
                <td><a href="/admin/main/author/add/" class="addlink">Добавить</a></td>
            

            
                
                <td><a href="/admin/main/author/" class="changelink">Изменить</a></td>
                
            
            </tr>
        
            <tr class="model-genre">
            
                <th scope="row"><a href="/admin/main/genre/">Жанры</a></th>
            

            
                <td><a href="/admin/main/genre/add/" class="addlink">Добавить</a></td>
            

            
                
                <td><a href="/admin/main/genre/" class="changelink">Изменить</a></td>
                
            
            </tr>
        
            <tr class="model-movieshots">
            
                <th scope="row"><a href="/admin/main/movieshots/">Кадры из фильма</a></th>
            

            
                <td><a href="/admin/main/movieshots/add/" class="addlink">Добавить</a></td>
            

            
                
                <td><a href="/admin/main/movieshots/" class="changelink">Изменить</a></td>
                
            
            </tr>
        
            <tr class="model-category">
            
                <th scope="row"><a href="/admin/main/category/">Категории</a></th>
            

            
                <td><a href="/admin/main/category/add/" class="addlink">Добавить</a></td>
            

            
                
                <td><a href="/admin/main/category/" class="changelink">Изменить</a></td>
                
            
            </tr>
        
            <tr class="model-book">
            
                <th scope="row"><a href="/admin/main/book/">Книги</a></th>
            

            
                <td><a href="/admin/main/book/add/" class="addlink">Добавить</a></td>
            

            
                
                <td><a href="/admin/main/book/" class="changelink">Изменить</a></td>
                
            
            </tr>
        
            <tr class="model-reviews">
            
                <th scope="row"><a href="/admin/main/reviews/">Отзывы</a></th>
            

            
                <td><a href="/admin/main/reviews/add/" class="addlink">Добавить</a></td>
            

            
                
                <td><a href="/admin/main/reviews/" class="changelink">Изменить</a></td>
                
            
            </tr>
        
        </table>
        </div>
    
        <div class="app-auth module">
        <table>
        <caption>
            <a href="/admin/auth/" class="section" title="Модели в приложении Пользователи и группы">Пользователи и группы</a>
        </caption>
        
            <tr class="model-group">
            
                <th scope="row"><a href="/admin/auth/group/">Группы</a></th>
            

            
                <td><a href="/admin/auth/group/add/" class="addlink">Добавить</a></td>
            

            
                
                <td><a href="/admin/auth/group/" class="changelink">Изменить</a></td>
                
            
            </tr>
        
            <tr class="model-user">
            
                <th scope="row"><a href="/admin/auth/user/">Пользователи</a></th>
            

            
                <td><a href="/admin/auth/user/add/" class="addlink">Добавить</a></td>
            

            
                
                <td><a href="/admin/auth/user/" class="changelink">Изменить</a></td>
                
            
            </tr>
        
        </table>
        </div>
    

</div>

        
<div id="content-related">
    <div class="module" id="recent-actions-module">
        <h2>Последние действия</h2>
        <h3>Мои действия</h3>
            
            
            
            <ul class="actionlist">
            
            <li class="addlink">
                
                    <a href="/admin/main/book/4/change/">Крестный отец</a>
                
                <br>
                
                    <span class="mini quiet">Книга</span>
                
            </li>
            
            <li class="deletelink">
                
                    Пользователь admin заказал Я был секретарем Сталина
                
                <br>
                
                    <span class="mini quiet">Orders</span>
                
            </li>
            
            <li class="deletelink">
                
                    Пользователь admin заказал Крестный отец
                
                <br>
                
                    <span class="mini quiet">Orders</span>
                
            </li>
            
            <li class="deletelink">
                
                    Пользователь admin заказал Крестный отец
                
                <br>
                
                    <span class="mini quiet">Orders</span>
                
            </li>
            
            <li class="deletelink">
                
                    Пользователь admin заказал Я был секретарем Сталина
                
                <br>
                
                    <span class="mini quiet">Orders</span>
                
            </li>
            
            <li class="deletelink">
                
                    Пользователь admin заказал Я был секретарем Сталина
                
                <br>
                
                    <span class="mini quiet">Orders</span>
                
            </li>
            
            <li class="deletelink">
                
                    Пользователь admin заказал Я был секретарем Сталина
                
                <br>
                
                    <span class="mini quiet">Orders</span>
                
            </li>
            
            <li class="deletelink">
                
                    Пользователь admin заказал Я был секретарем Сталина
                
                <br>
                
                    <span class="mini quiet">Orders</span>
                
            </li>
            
            <li class="changelink">
                
                    <a href="/admin/main/book/2/change/">Я был секретарем Сталина</a>
                
                <br>
                
                    <span class="mini quiet">Книга</span>
                
            </li>
            
            <li class="changelink">
                
                    <a href="/admin/main/book/3/change/">Крестный отец</a>
                
                <br>
                
                    <span class="mini quiet">Книга</span>
                
            </li>
            
            </ul>
            
    </div>
</div>

        <br class="clear">
    </div>
    <!-- END Content -->

    <div id="footer"></div>
</div>
<!-- END Container -->

</body>
</html>
