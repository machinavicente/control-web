var dbHost = 'localhost';
var dbUser = 'root';
var dbPassword = '';
var dbName = 'sistem';

function countRecords() {
    var sql = 'SELECT COUNT(*) FROM contratos';

    var xhr = new XMLHttpRequest();
        xhr.open('POST', 'http://' + dbHost + '/' + dbName, true);

        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');

        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                var recordCount = xhr.responseText;
                 alert('El número de registros en la tabla es: ' + recordCount);
            }
        }

        xhr.send('sql=' + encodeURIComponent(sql) + '&username=' + dbUser + '&password=' + dbPassword);
    }

    countRecords();