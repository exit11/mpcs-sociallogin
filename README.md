# Mpcs Core Extention : SocialLogin

## provider 실행

```
php .\artisan vendor:publish --provider="Exit11\SocialLogin\SocialLoginServiceProvider"
```

## migrate 실행

```
php .\artisan migrate
```

## config > mpcs.php 에 vendor 추가

```

```

## config > service.php 에 소셜로그인 드라이버 추가

```

    // 소셜로그인 설정
    'kakao' => [
        'client_id' => env('KAKAO_CLIENT_ID'),
        'client_secret' => env('KAKAO_CLIENT_SECRET'),
        'redirect' => env('KAKAO_REDIRECT_URI')
    ],
    'naver' => [
        'client_id' => env('NAVER_CLIENT_ID'),
        'client_secret' => env('NAVER_CLIENT_SECRET'),
        'redirect' => env('NAVER_REDIRECT_URI')
    ],
    'google' => [
        'client_id' => env('GOOGLE_CLIENT_ID'),
        'client_secret' => env('GOOGLE_CLIENT_SECRET'),
        'redirect' => env('GOOGLE_REDIRECT_URI')
    ],

```

## 서비스 등록

카카오 서비스 등록 : https://developers.kakao.com/console/app
