	<footer><p >Built by Alex Belinsky</p></footer>
</body>
</html>

<?php
  // 5. Close database connection
  if (isset($connection)) {
        mysqli_close($connection);
  }
?>