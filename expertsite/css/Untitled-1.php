<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<script> 
 //Functions to open database and to create, insert data into tables

 getSelectedRow = function(val)
    {
        db.transaction(function(transaction) {
              transaction.executeSql('SELECT * FROM Employ where number = ' + parseInt(val) +',[], selectedRowValues, errorHandler);

        });
    };
    selectedRowValues = function(transaction,results)
    {
         for(var i = 0; i < results.rows.length; i++)
         {
             var row = results.rows.item(i);
             alert(row['number']);
             alert(row['name']);                 
         }
    };
</script>
</body>
</html>
