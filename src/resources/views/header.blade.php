<!DOCTYPE html>
<html>
    <body>
        <nav id="headerNav" class="justify-content fiexd flex w-100">
            <div class="flex w-100">
                <a class="flex flex-center" href="/">
                    <img src="{{ asset('/images/logo_stellargo-white.svg') }}" />
                </a>
                <ul class="l-header_menu">
                    <li class="l-header_menu_item"><a href="/ticket">チケット申請</a></li>
                    <li class="l-header_menu_item"><a href="/lottery">キャラ申込</a></li>
                    <li class="l-header_menu_item"><a>当選情報</a></li>
                    <li class="l-header_menu_item"><a>マイファーム</a></li>
                </ul>
                <ul class="l-header_menu_sub">
                    <li class="l-header_menu_sub_item"><a href="/ticket">チケット <span>{{ $ticket }}</span></a></li>
                    <li class="l-header_menu_sub_item"><a href="/mypage">マイページ</a></li>
                    <li class="l-header_menu_sub_item"><a href="/logout">ログアウト</a></li>
                </ul>
            </div>
        </nav>
    </body>
</html>
