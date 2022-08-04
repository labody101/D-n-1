<!DOCTYPE html>
<html>
<head>
  <script src="https://cdn.tiny.cloud/1/e96ufbuw2059vj2vtckoj39vqxpu40i82hqvlt1040bgbsqw/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
</head>
<body>
    <form action="" method="post">
        <textarea id="classic" name="content">
        </textarea>
        <button type="submit">Send</button>
    </form>
    <?php
    $_POST['content'];
    
    ?>
  <script>
    tinymce.init({
      selector: 'textarea#classic',
      plugins: 'a11ychecker advcode casechange export formatpainter image editimage linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tableofcontents tinycomments tinymcespellchecker',
      toolbar: 'a11ycheck addcomment showcomments casechange checklist code export formatpainter image editimage pageembed permanentpen table tableofcontents',
      toolbar_mode: 'floating',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
    });
  </script>
</body>
</html>