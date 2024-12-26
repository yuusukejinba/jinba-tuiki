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
    <div class="product-form__content">
      <div class="product-form__heading">
        <label class="product-form">
            <h2>商品一覧</h2>
            <a class=submit href="/products/register"> + 商品を追加</a>
        </label>
        
      </div>
      <form class="form" action="/products/search" method="post" >
      @csrf
          <div class="form__group">        
              <div class="form__group-list">           
                  <input type="text" name="form__list-search" placeholder="商品名で検索" /></input>
              </div>

              <div class="form__group-list">
                  <input type="submit" name="form__search__btn" value="検索"/></input>
              </div>

              <div class="form__group-list">
                  <div class="form__group-display">
                    <h3>価格順で表示</h3>
                  </div>
              </div>

              <div class="form__group-list" >
                  <select class="form__group-select" name="select" id="id" >
                      <option disabled selected>価格で並べ替え</option>
                  </select>                  
              </div>
          </div>
      </form>
   </div>
</main>

    
</body>