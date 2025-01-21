<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Module 1 Lab Exercise 04</title>
</head>

<body>

    <h1>Module 1 Lab Exercise 04</h1>

    <p>Create multiple tables and perform queries using : SELECT, UPDATE, DELETE, INSERT, WHERE, LIKE, GROUP BY, HAVING, LIMIT, OFFSET, Subqueries, AND, OR, NOT.</p>

    <!-- Create multiple tables and perform queries using : SELECT, UPDATE, DELETE, INSERT, WHERE, LIKE, GROUP BY, HAVING, LIMIT, OFFSET, Subqueries, AND, OR, NOT -->

    <h3>SQL Queries</h3>

    <textarea id="text-input" rows="6" cols="60" value=""><?php echo file_get_contents('M1_LE_04.md') ?></textarea>

    <div id="preview"> </div>

    <script src="./M1_LE_04.md"></script>
    <script>
      function Editor(input, preview) {
        this.update = function () {
          preview.innerHTML = markdown.toHTML(input.value);
        };
        input.editor = this;
        this.update();
      }
      var $ = function (id) { return document.getElementById(id); };
      new Editor($("text-input"), $("preview"));
    </script>

</body>

</html>