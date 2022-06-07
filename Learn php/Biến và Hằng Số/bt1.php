<?php
// Biến là một định danh, nó dùng để lưu trữ các giá trị và nó có thể dùng phép gán để thay đổi giá trị. 
// Cú pháp của biến bắt đầu bằng dấu đô la $ và tiếp theo là các chữ, số, dấu gạch dưới.
//  Ký tự đầu tiên của tên biến phải là chữ hoặc là dấu gạch dưới, không được là số.

// Hằng cũng là một biến nhưng bạn không thể thay đổi giá trị của nó. Tuy nhiên cách khai báo biến và hằng số thì lại khác nhau.

// Cú Pháp: define(‘ten_hang’, ‘gia_tri’);

// Trong đó:

// define: hàm tạo biến hằng
// ten_hang: là tên biến hằng
// gia_tri: giá trị của hằng


/* Tạo một hằng số có tên là SDT và gán giá trị cho nó là 0909090909*/
define('SDT', '0909090909');
echo SDT; // xuất ra màn hình giá trị của hằng.
?>