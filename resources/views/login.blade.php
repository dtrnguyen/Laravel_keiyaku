<!DOCTYPE Html>
<html>
<head>
    <title>Login</title>
    <style>
        .login_class{
            background-color:mediumpurple;
            height: 35px;
            margin-left: -8px;
            margin-right: -8px;
        }
        h4{
            margin-top:0px;
            padding: 5px;
            margin-left: 10px;
            color: white;
        }
        h6{
            color:#FFFF00;
        }
        .note_class{
            width: 650px;
            height: 100px;
            background-color:darkgreen;
            float:right;
            margin-right: 150px;
            margin-top:-100px;
            font-size: 20px;
            color: #FFFF00;
        }
        .input_info{
            margin-top: 5px;
            margin-left: 60px;
        }
        input{
            display:  inline-block;
            width: 450px;
            height: 35px;
            margin-top: 20px;
        }
        .footer_class{
            background-color:mediumpurple;
        }
        p{
            color: white;
            font-size: 15px;
        }
        #clearBtn,#loginBtn{
            width: 100px;
            height: 35px;
            cursor: pointer;
            position: relative;
            border-radius: 4px;
        }
        #clearBtn{
            margin-top:50px;
            margin-left: 190px;
            background: url('/images/iconsBtn3.PNG');
            background-position:left;
            background-repeat:no-repeat;
        }
        #clearBtn:hover{
            background-color:lightslategray;
        }
        #loginBtn{          
            background: url('/images/iconsBtn2.PNG');
            background-position: left;
            background-repeat: no-repeat;
            background-color:rgba(250, 50, 10, 0.3);
        }
        .addNewUser{
            margin-left: 80px;
            margin-top: 50px;
            padding: 20px;
        }
        .addNewUser a:hover{
            color:mediumaquamarine;
        }
    </style>
</head>
<body>
    <a href="http://www.tobu-koshigaya.jp/">
        <img src={{ URL::asset('/images/schoolname_picture.PNG')}}>
    </a>
    <div class="login_class">
        <h4>ログイン</h4>
    </div>
    <div class="input_info">
        <form method="POST" action="/login">
            @csrf
            <label for="title">教習生番号</label>
            <input id="kyoshuseiBango" type="text"><br>
            <label for="title">パスワード</label>
            <input id="password" type="password"><br>
            <div class="note_class">
                ≪ご利用上の注意≫<br>
                .ブラウザの戻る、進、更新ボタンは利用できません。<br>
                .複数ブラウザで当システムを利用することは出来ません。
            </div>
            <input id="clearBtn" type="button" value="クリア">
            <input id="loginBtn" type="submit" value="ログイン">
        </form>
    </div>
    <div class="addNewUser">
        <a href="addNew">
            <img src={{ URL::asset('/images/iconAdduser4.PNG')}}>新規登録
        </a>
    </div>
</body>
<footer>
    <div class="footer_class">
        <p>created by CEO Nguyen</p>
    </div>
</footer>
</html>