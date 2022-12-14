<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BETTer</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css"
        integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js"
        integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD" crossorigin="anonymous">
    </script>
    <style type="text/css">
    ul {
        list-style-type: none;
        /* 상단 메뉴바 점 표식 없애기 */
        background-color: #73A9AD;
        /* 상단 메뉴바 배경색 */
    }

    ul:after {
        content: '';
        display: block;
        clear: both;
    }

    li {
        float: left;
        /* 상단 메뉴바 왼쪽 정렬 */
    }

    li a {
        display: block;
        color: white;
        /* 상단 메뉴바 글씨색 */
        text-align: center;
        /* 상단 메뉴바 글씨 위치 */
        padding: 14px 16px;
        /* 상단 메뉴바 너비 */
        text-decoration: none;
        /* 상단 메뉴바에 페이지 아래 밑줄을 없애줌. */
    }

    /* 상단 메뉴바에 사용자가 이동하고 싶은 페이지에 마우스를 올렸을 때 */
    li a:hover:not(.active) {
        background-color: #3e91b5;
    }

    /* 상단 메뉴바에 현재 실행중인 페이지를 표시해줌. */
    .active {
        background-color: #009900;
        
        font-weight: bold;
    }
    </style>
</head>

<body>
    <header>
        <ul class="menu-area-main">
            <li> <a href="">BETTer</a> </li>
            <li> <a href="index.html">홈화면</a> </li>
            <!-- 현재 위치한 화면을 카테고리 목록에 표시해준다. -->
            
            <li> <a href="service_wave.html">서비스</a> </li>
            <li class = "active"> <a href="login.php">로그인</a> </li>
            <li> <a href="signup.html">회원가입</a></li>
          </ul>
    </header>
    <form method="POST" action="login_check.php">
        <div class="w-50 ml-auto mr-auto mt-5">
            <div class="mb-3 ">
                <label for="exampleFormControlInput1" class="form-label">아이디</label>
                <input name="id" type="text" class="form-control" id="exampleFormControlInput1" placeholder="id">
            </div>
            <div class="mb-3 ">
                <label for="exampleFormControlInput1" class="form-label">비밀번호</label>
                <input name="password" type="password" class="form-control" id="exampleFormControlInput1"
                    placeholder="password">
            </div>

            <button type="submit" class="btn btn-primary mb-3">로그인</button>

    
        </div>
    </form>
</body>

</html>