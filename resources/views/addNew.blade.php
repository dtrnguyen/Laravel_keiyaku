<!DOCTYPE Html>
<html>
<head>
    <title>addNew</title>
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
            width: 850px;
            margin: auto;
        }
        input{
            width: 450px;
            height: 35px;
            margin-top: 20px;
            margin-left: 20px;
        }
        .footer_class{
            background-color:mediumpurple;
        }
        p{
            color: white;
            font-size: 15px;
        }
        #clearBtn,#addBtn,#backBtn{
            width: 100px;
            height: 35px;
            cursor: pointer;
            border-radius: 4px;
        }
        #backBtn{
            width: 90px;
            background: url('/images/iconBack1.PNG');
            background-position: left;
            background-repeat: no-repeat;
            margin-left: 50px;
            background-color:powderblue;
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
        #addBtn{          
            background: url('/images/iconAdduser3.PNG');
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
        #year{
            width: 120px;
        }
        span{
            background-color: red;
            color: white;
            border-radius: 6px;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <a href="#">
        <img src={{ URL::asset('/images/schoolname_picture.PNG')}}>
    </a>
    <div class="login_class">
        <h4>新規登録</h4>
    </div>
    <a href="login">
        <input id="backBtn" type="button" value="戻る">
    </a>
    <div class="input_info">
        <form method="POST" action="/addUser">
            @csrf
            <label for="title">生年月日<label>
                <span>必須</span>
                <label>西暦<label>
                    <input id="year">
                <label>年</label>
                    <select>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                        <option>11</option>
                        <option>12</option>
                    </select>
                    <label>月</label>
                    <select>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                        <option>11</option>
                        <option>12</option>
                        <option>12</option>
                        <option>14</option>
                        <option>15</option>
                        <option>16</option>
                        <option>17</option>
                        <option>18</option>
                        <option>19</option>
                        <option>20</option>
                        <option>21</option>
                        <option>22</option>
                        <option>23</option>
                        <option>24</option>
                        <option>25</option>
                        <option>26</option>
                        <option>27</option>
                        <option>28</option>
                        <option>29</option>
                        <option>30</option>
                        <option>31</option>
                    </select>
                    <label>日</label>
            <br>
            <label for="title">教習生番号</label>
                <span>必須</span>
                <input id="kyoushuseiNumber">
            <br>
            <label for="title">パスワード(半角英数6~16桁)</label>
                <span>必須</span>
                <input id="password" type="password">
            <br>
            <label for="title">再入力</label>
                <span>必須</span>
                <input id="repassword" type="password">
            <br>
            <label for="title">メールアドレス(半角)</label>
                <input id="mailAddress" placeholder="dongdinh@gmail.com">
            <br>
            <label for="title">再入力</label>
                <input id="remailAddress" placeholder="dongdinh@gmail.com">
            <br>
            <input id="clearBtn" type="button" value="クリア">
            <input id="addBtn" type="submit" value="登録">
        </form>
    </div>
</body>
<footer>
    <div class="footer_class">
        <p>created by CEO Nguyen</p>
    </div>
</footer>
</html>