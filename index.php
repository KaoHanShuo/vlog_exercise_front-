<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    
    <!-- CSS -->
    <link href="./css/css.css" rel="stylesheet" type="text/css">
    
    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    
    <title>Document</title>
</head>
<body>



<div class="header">
    <nav class="menu">
        <div class="menu__bg">
            <div class="menu__container clearfix">
                <ul class="list-unstyled menu__left">
                    <li class="menu__item"><a class="menu__item-link">asadsadasd</a></li>
                    <li class="menu__item"><a class="menu__item-link">asadsadasd</a></li>
                    <li class="menu__item"><a class="menu__item-link">asadsadasd</a></li>
                    <li class="menu__item"><a class="menu__item-link">asadsadasd</a></li>
                </ul>
            <div>
        </div>
    </nav>
</div>


    
<div class="container-sm d-flex justify-content-center">
    <form action="http://127.0.0.1:8000/api/user" method="POST" class="row g-3 border border-2 col-6 index-top">
        <div class="row g-2"> 
            <div class="col-md-5">
                <p>帳號</p>
                <input type="text" class="form-control" name="account"  >
            </div>
            <div class="col-md-auto">
                <p>性別</p>
                <select class="form-select" name="gender" >
                    <option selected  value="1">男</option>
                    <option value="0">女</option>
                </select>
            </div>
            <div class="col-md-5">
                <p>姓名</p>
                <input type="text" class="form-control" name="name" >
            </div>
        </div>
        <div class="row g-2"> 
            <div class="col-md-auto">
                <p>生日</p>
                <input type="date" class="form-control" name="birthday" >
            </div>
            <div class="col-md-4">
                <p>信箱</p>
                <input type="text" class="form-control" name="email"  >
            </div>
        </div>
        <div class="col-md-12">
            <p>備註</p>
            <textarea  class="form-control" name="note" rows="3" style="resize:none;" ></textarea>
        </div>
      
        <div class="col-12 pb-3">
            <button class="btn btn-primary" type="submit">送出</button>
        </div>
    </form>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="leftside">
                <div class="board">
                    <div class="qa-list">
                123
                    </div>
                    <div class="qa-list">
                123
                    </div>
                    <div class="qa-list">
                123
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- js -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

<script>
    $.ajax({
        type:'GET',
        url:'http://127.0.0.1:8000/api/user',
        dataType:'json',
        //headers: {"Authorization": 'Bearer' + res.access_token},
        success:function(res){
            //console.log(res);
            $.each(res, function(key,value){
                console.log(value.account);
                // var string1 = "onclick="+"location.href='?do=edit_admin&id=" + value.id + "'";
                // var string2 = "<" + "button "+string1+">編輯</button>";
                // $("table tr:last-child").after("<tr><td> "+value.account+" </td><td>"+string2+" </td></tr>");
                // //$("tr").addClass("pp");

                // // $( "table" ).delegate( "tr td:last-child", "click", function() {
                // //     var url = '?do=edit_admin&id='+value.id;
                // //      location.href = url;
                // // } );

                // // $("table>tr>td>button").bind("click",function(){
                // //     var url = '?do=edit_admin&id='+value.id;
                // //     location.href = url;
                // // });
                // $("tr").addClass("pp");
            })
        },
        error:function(err){
            console.log(err)
        },
    });     
</script>

</body>
</html>