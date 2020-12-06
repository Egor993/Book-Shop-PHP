
<!DOCTYPE html>

<html lang="ru" >
<head>
<title>Admin panel</title>
<link rel="stylesheet" type="text/css" href="/template/css/admin.css">

    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/static/admin/css/responsive.css">
    

<meta name="robots" content="NONE,NOARCHIVE">
</head>


<body class=" app-main model-book change-form"
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
    
<div class="breadcrumbs">
<a href="/admin/">Начало</a>
&rsaquo; <a href="/admin/main/">Main</a>
&rsaquo; <a href="/admin/main/book/">Книги</a>
&rsaquo; Добавить Книга
</div>

    

    
        
    

    <!-- Content -->
    <div id="content" class="colM">
        
        <h1>Добавить Книга</h1>
        <div id="content-main">



<form enctype="multipart/form-data" action="" method="post" id="book_form" novalidate><input type="hidden" name="csrfmiddlewaretoken" value="vbzc4vMYXHgqLFryLRVgCmxL3tPm4dSbnLGObB6eqRZFshQ8dbRcs50r7dXSrWmf">
<div>







  <fieldset class="module aligned ">
    
    
    
        <div class="form-row field-title">
            
            
                <div>
                    
                    
                        <label class="required" for="id_title">Название:</label>
                        
                            <input type="text" name="title" class="vTextField" maxlength="100" required id="id_title">
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-tagline">
            
            
                <div>
                    
                    
                        <label class="required" for="id_tagline">Слоган:</label>
                        
                            <input type="text" name="tagline" class="vTextField" maxlength="100" required id="id_tagline">
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-description">
            
            
                <div>
                    
                    
                        <label class="required" for="id_description">Описание:</label>
                        
                            <textarea name="description" cols="40" rows="10" class="vLargeTextField" required id="id_description">
</textarea>
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-poster">
            
            
                <div>
                    
                    
                        <label class="required" for="id_poster">Постер:</label>
                        
                            <input type="file" name="poster" accept="image/*" required id="id_poster">
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-year">
            
            
                <div>
                    
                    
                        <label class="required" for="id_year">Дата выхода:</label>
                        
                            <input type="number" name="year" value="2019" class="vIntegerField" min="0" required id="id_year">
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-country">
            
            
                <div>
                    
                    
                        <label class="required" for="id_country">Страна:</label>
                        
                            <input type="text" name="country" class="vTextField" maxlength="30" required id="id_country">
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-author">
            
            
                <div>
                    
                    
                        <label class="required" for="id_author">Автор:</label>
                        
                            <div class="related-widget-wrapper">
    <select name="author" required id="id_author" multiple>
  <option value="2">Бажанов Борис Георгиевич</option>

  <option value="3">Пьюзо Марио</option>

</select>
    
        <a class="related-widget-wrapper-link add-related" id="add_id_author"
            href="/admin/main/author/add/?_to_field=id&amp;_popup=1"
            title="Добавить ещё один объект типа "Автор""><img src="/static/admin/img/icon-addlink.svg" alt="Добавить"></a>
    
</div>
                        
                    
                    
                        <div class="help">Удерживайте "Control" (или "Command" на Mac), чтобы выбрать несколько значений.</div>
                    
                </div>
            
        </div>
    
        <div class="form-row field-genres">
            
            
                <div>
                    
                    
                        <label class="required" for="id_genres">Жанры:</label>
                        
                            <div class="related-widget-wrapper">
    <select name="genres" required id="id_genres" multiple>
  <option value="1">Биография</option>

  <option value="2">Драма</option>

</select>
    
        <a class="related-widget-wrapper-link add-related" id="add_id_genres"
            href="/admin/main/genre/add/?_to_field=id&amp;_popup=1"
            title="Добавить ещё один объект типа "Жанр""><img src="/static/admin/img/icon-addlink.svg" alt="Добавить"></a>
    
</div>
                        
                    
                    
                        <div class="help">Удерживайте "Control" (или "Command" на Mac), чтобы выбрать несколько значений.</div>
                    
                </div>
            
        </div>
    
        <div class="form-row field-url">
            
            
                <div>
                    
                    
                        <label class="required" for="id_url">Url:</label>
                        
                            <input type="text" name="url" class="vTextField" maxlength="130" required id="id_url">
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-draft">
            
            
                <div class="checkbox-row">
                    
                    
                        <input type="checkbox" name="draft" id="id_draft"><label class="vCheckboxLabel" for="id_draft">Черновик</label>
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-price">
            
            
                <div>
                    
                    
                        <label class="required" for="id_price">Цена:</label>
                        
                            <input type="number" name="price" value="0" class="vIntegerField" min="0" required id="id_price">
                        
                    
                    
                </div>
            
        </div>
    
</fieldset>













<div class="submit-row">

<input type="submit" value="Сохранить" class="default" name="_save">


<input type="submit" value="Сохранить и добавить другой объект" name="_addanother">
<input type="submit" value="Сохранить и продолжить редактирование" name="_continue">


</div>



    <script type="text/javascript"
            id="django-admin-form-add-constants"
            src="/static/admin/js/change_form.js"
            
                data-model-name="book"
            >
    </script>




<script type="text/javascript"
        id="django-admin-prepopulated-fields-constants"
        src="/static/admin/js/prepopulate_init.js"
        data-prepopulated-fields="[{&quot;id&quot;: &quot;#id_url&quot;, &quot;name&quot;: &quot;url&quot;, &quot;dependency_ids&quot;: [&quot;#id_title&quot;], &quot;dependency_list&quot;: [&quot;title&quot;], &quot;maxLength&quot;: 130, &quot;allowUnicode&quot;: false}]">
</script>


</div>
</form></div>

        
        <br class="clear">
    </div>
    <!-- END Content -->

    <div id="footer"></div>
</div>
<!-- END Container -->

</body>
</html>
