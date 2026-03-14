<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/confirm.css') }}" />
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/">
        Contact Form
            </a>
        </div>
    </header>

    <main>
        <div class="confirm__content">
            <div class="confirm__heading">
                <h2>お問い合わせ内容確認</h2>
            </div>
            <form action = "/contacts" method = "POST">
            @csrf
                <div class="confirm-table">
                    <table class="confirm-table__inner">
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">お名前</th>
                            <td class="confirm-table__text">
                                <input type="hidden" name="first_name" value="{{ $contact['first_name'] }}"/>{{ $contact['first_name'] }}
                                <input type="hidden" name="last_name" value="{{ $contact['last_name'] }}"/>{{ $contact['last_name'] }}
                            </td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">性別</th>
                            <td class="confirm-table__text">
                                @if($contact['gender'] == 1) 男性 @elseif($contact['gender'] == 2) 女性 @else その他 @endif
                                <input type="hidden" name="gender" value="{{ $contact['gender'] }}" />
                            </td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">メールアドレス</th>
                            <td class="confirm-table__text">
                                <input type="hidden" name="email" value="{{ $contact['email'] }}" />{{ $contact['email'] }}
                            </td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">電話番号</th>
                            <td class="confirm-table__text">
                                <input type="hidden" name="tel_1" value="{{ $contact['tel_1'] }}" />{{ $contact['tel_1'] }}
                                -
                                <input type="hidden" name="tel_2" value="{{ $contact['tel_2'] }}" />{{ $contact['tel_2'] }}
                                -
                                <input type="hidden" name="tel_3" value="{{ $contact['tel_3'] }}" />{{ $contact['tel_3'] }}
                            </td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">住所</th>
                            <td class="confirm-table__text">
                                <input type="hidden" name="address" value="{{ $contact['address'] }}" />{{ $contact['address'] }}
                            </td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">建物名</th>
                            <td class="confirm-table__text">
                                <input type="hidden" name="building" value="{{ $contact['building'] }}" />{{ $contact['building'] }}
                            </td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">お問い合わせの種類</th>
                            <td class="confirm-table__text">
                                <input type="hidden" name="category_id" value="{{ $contact['category_id'] }}" />{{ $category->content }}
                            </td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">お問い合わせ内容</th>
                            <td class="confirm-table__text">
                                <input type="hidden" name="detail" value="{{ $contact['detail'] }}" />{{ $contact['detail'] }}
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="form__button">
                    <button class="form__button-submit" type="submit">送信</button>
                    <button class="form__button-submit" type="submit" name="reset">修正</button>

                </div>
            </form>
        </div>
    </main>
</body>

</html>
