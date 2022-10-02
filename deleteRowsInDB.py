# delete the last 10 rows in the database mysql

import mysql.connector
from mysql.connector import Error

try:
    connection = mysql.connector.connect(host='localhost',
                                         database='test',
                                         user='root',
                                         password='')

    sql_delete_query = """DELETE FROM login WHERE id = %s"""
    cursor = connection.cursor()
    cursor.execute(sql_delete_query, (10,))
    connection.commit()
    print(cursor.rowcount, "Record deleted successfully ")

except mysql.connector.Error as error:
    print("Failed to delete record from MySQL table: {}".format(error))
finally:
    if (connection.is_connected()):
        cursor.close()
        connection.close()
        print("MySQL connection is closed")

# output
