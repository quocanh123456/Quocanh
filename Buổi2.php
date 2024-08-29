
<!DOCTYPE html>
<html lang="en">
<head>
<!--Viết một chương trình PHP để đếm số ký tự trong một chuỗi sử dụng hàm strlen().
Viết một chương trình PHP để đếm số từ trong một chuỗi sử dụng hàm str_word_count().
Viết một chương trình PHP để đảo ngược một chuỗi sử dụng hàm strrev().
Viết một chương trình PHP để tìm kiếm một chuỗi con trong một chuỗi sử dụng hàm strpos().
Viết một chương trình PHP để thay thế một chuỗi con trong một chuỗi bằng một chuỗi khác sử dụng hàm str_replace().
Viết một chương trình PHP để kiểm tra xem một chuỗi có bắt đầu bằng một chuỗi con khác không sử dụng hàm strncmp().
Viết một chương trình PHP để chuyển đổi một chuỗi thành chữ hoa sử dụng hàm strtoupper().
Viết một chương trình PHP để chuyển đổi một chuỗi thành chữ thường sử dụng hàm strtolower().
Viết một chương trình PHP để chuyển đổi một chuỗi thành chuỗi in hoa chữ cái đầu tiên của mỗi từ sử dụng hàm ucwords().
Viết một chương trình PHP để loại bỏ khoảng trắng ở đầu và cuối chuỗi sử dụng hàm trim().
Viết một chương trình PHP để loại bỏ ký tự đầu tiên của một chuỗi sử dụng hàm ltrim().
Viết một chương trình PHP để loại bỏ ký tự cuối cùng của một chuỗi sử dụng hàm rtrim().
Viết một chương trình PHP để tách một chuỗi thành một mảng các phần tử sử dụng hàm explode().
Viết một chương trình PHP để nối các phần tử của một mảng thành một chuỗi sử dụng hàm implode().
Viết một chương trình PHP để thêm một chuỗi vào đầu hoặc cuối của một chuỗi sử dụng hàm str_pad().
Viết một chương trình PHP để kiểm tra xem một chuỗi có kết thúc bằng một chuỗi con khác không sử dụng hàm strrchr().
Viết một chương trình PHP để kiểm tra xem một chuỗi có chứa một chuỗi con khác không sử dụng hàm strstr().
Viết một chương trình PHP để thay thế tất cả các ký tự trong một chuỗi không phải là chữ cái hoặc số bằng một ký tự khác sử dụng hàm preg_replace().
Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là một số nguyên hay không sử dụng hàm is_int().
Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là một email hợp lệ hay không sử dụng hàm filter_var().
-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <?php
    // Câu 4: Viết một chương trình PHP để tìm kiếm một chuỗi con trong một chuỗi sử dụng hàm strpos().//
    $chuoilon = "Cộng hòa xã hội chủ nghĩa Việt Nam";
    $chuoinho = "chủ nghĩa";
    $position = strpos($chuoilon, $chuoinho);
    If ($position !== false) {
        echo "Chuỗi con được tìm thấy tại vị trí: $position";}
    else {
        echo "Chuỗi con ko được tìm thấy";
    }
    ?>
    <html>
        <br>
    </html>
    <!-- 
     Câu 7: Viết một chương trình PHP để chuyển đổi một chuỗi thành chữ hoa sử dụng hàm strtoupper().
    -->
    <?php
    $abc="Không tồn tại";
    echo strtoupper($abc);
    ?>
     <html>
        <br>
    </html>
    <?php
    //Câu 9: Viết một chương trình PHP để chuyển đổi một chuỗi thành chuỗi in hoa 
    //chữ cái đầu tiên của mỗi từ sử dụng hàm ucwords()
    $abc="Không tồn tại";
    echo ucwords($abc);
    ?>
     <html>
        <br>
    </html>
    <?php 
    //Câu 14:Viết một chương trình PHP để nối các phần tử của một mảng thành một chuỗi sử dụng hàm implode()
    $array=[  "Xin","chào",'các',"bạn"];
    echo implode(" ",$array); 
    ?>
    <br>
    <?php
    //Câu 16:Viết một chương trình PHP để kiểm tra xem một chuỗi có kết thúc bằng một chuỗi con khác không sử dụng hàm strrchr().
    $string = "Hello, world!";
    $substring = "world!";

    if (strrchr($string, $substring)!== false) {
    echo "Chuỗi $string kết thúc bằng \"$substring\".";
    } else {
    echo "Chuỗi \"$string\" không kết thúc bằng \"$substring\".";
    }
    ?>
    <br>
    <?php
    //Câu 17: Viết một chương trình PHP để kiểm tra xem một chuỗi có chứa một chuỗi con khác không sử dụng hàm strstr()
    $string = "Hello, welcome to the world of PHP!";
    $substring = "welcome";

    if (strstr($string, $substring)!==0) {
        echo "Chuỗi con '$substring' được tìm thấy trong chuỗi '$string'.";
    } else {
        echo "Chuỗi con '$substring' không được tìm thấy trong chuỗi '$string'.";
    }
    ?>
    <br>
    <?php
    //Câu 18: Viết một chương trình PHP để thay thế tất cả các ký tự trong một chuỗi không phải là chữ cái hoặc số bằng một ký tự khác sử dụng hàm preg_replace()
    $string= "The secret makes the woman woman";
    $replacedString = preg_replace("/[^a-zA-Z0-9]/", " ", $string);
    echo $replacedString;
    ?>
    <br>
</body>
</html>
