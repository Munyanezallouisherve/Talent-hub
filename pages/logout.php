<!DOCTYPE html>
<html>
<head>
  <title>Logout | Natembea Online</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background-color: #dedab6;">
<style>
  body {
    font-family: 'Roboto', sans-serif;
    margin: 0;
    padding: 0;
  }

  .container {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100vh;
  }

  h1 {
    color: #07bca3;
    margin-bottom: 20px;
  }

  .logout-btn {
    background-color: #07bca3;
    color: white;
    padding: 15px 30px;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s ease;
  }

  .logout-btn:hover {
    background-color: #05665e;
  }

  .icon {
    font-size: 24px;
    margin-right: 10px;
    color: black;
  }

  .back-link {
    color: #07bca3;
    text-decoration: none;
    margin-top: 20px;
  }

  .back-link:hover {
    text-decoration: underline;
  }
</style>

<div class="container">
  <h1>Are you sure you want to logout?</h1>
  <form action="Index.php" method="post">
    <button type="submit" class="logout-btn"><i class="fas fa-sign-out-alt icon"></i>Logout</button>
  </form>
  <a href="employee_dashboard.php" class="back-link"><i class="fas fa-arrow-left icon"></i>Back to Dashboard</a>
</div>

</body>
</html>
