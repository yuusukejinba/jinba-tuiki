<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>mogitate</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <h1>mogitate</h1>
        </div>
    </header>

    <main>
        <div class="register-form__content">
            <div class="register-form__heading">
                <div class="register-form">
                    <h2>商品登録</h2>
                </div>
            </div>
        <form class="form" action="/products" method="post" >        
         @csrf 
            <div class="register-name__content">
                <div class="register-name__inner">
                    <div class="register-name-group">    {{-- 商品名 --}}
                        <label class="register-name__product">
                            商品名<span class="register-form__required">必須</span>
                        </label>
                    </div>
                    <div class="form__error">
                        <!--バリデーション機能を実装したら記述します。-->
                        @error('name')
                            {{ $message }}
                        @enderror
                    </div>
                    <div class="register-name__text-inputs">
                        <input class="register-name__input "type="text" name="register-name" id="name" placeholder="商品名を入力"> 
                    </div>
                </div>
                                
                <div class="register-name__inner">
                    <div class="register-name-group">    {{-- 値段 --}}
                        <label class="register-name__product">
                            値段<span class="register-form__required">必須</span>
                        </label>
                    </div>
                    <div class="form__error">
                        <!--バリデーション機能を実装したら記述します。-->
                        @error('price')
                            {{ $message }}
                        @enderror
                    </div>
                    <div class="register-name__text-inputs">
                        <input class="register-name__input "type="integer" name="price" id="price" placeholder="値段を入力"> 
                    </div>
                </div>    

                <div class="register-name__inner">    {{-- 商品画像 --}}
                    <div class="register-name-group">
                        <label class="register-name__product "for="register-name">
                            商品画像<span class="register-form__required">必須</span>
                        </label>
                    </div>

                    <div class="register-name__text-inputs">
                        <input type="image" name="image" value="ファイルを選択">
                    </div>
                </div>

                <div class="register-name__inner">    {{-- 季節 --}}
                    <div class="register-name-group">
                        <label class="register-name__product">季節
                            <span class="register-form__required">必須</span>
                            <span class="register-form__choice">複数選択可</span>
                        </label>
                    </div>
                    <div class="form__error">
                        <!--バリデーション機能を実装したら記述します。-->
                        @error('season_id')
                            {{ $message }}
                        @enderror
                    </div>
                    <div class="register-name__season__input">
                        <label class="register-form__season-label">
                            <input type="radio" name="season" id="spring">春</input>
                            <input type="radio" name="season" id="summer">夏</input>
                            <input type="radio" name="season" id="autumn">秋</input>
                            <input type="radio" name="season" id="winter">冬</input>
                        </label>
                    </div>
                </div>

                <div class="register-name__inner">    {{-- 商品説明 --}}
                    <div class="register-name-group">
                        <label class="register-name__product ">
                            商品説明<span class="register-form__required">必須</span>
                        </label>
                    </div>
                    <div class="form__error">
                        <!--バリデーション機能を実装したら記述します。-->
                        @error('description')
                            {{ $message }}
                        @enderror
                    </div>
                    <div class="register-name__btn-inputs">
                        <textarea type="text" name="description" placeholder="商品の説明を入力"></textarea>
                    </div>
                </div>

                <div class="register__btn">    {{-- 登録 --}}
                    <div class="register__btn__back">
                        <a class="register__btn__back-input" href="/products">戻る</a>
                    </div>
                    <div class="register__btn__register">
                        <button class="register__btn__register-input" type="submit">登録</button> 
                    </div>  
                </div>  

            </div>
        </form>        
        </div>
    </main>
  </body>