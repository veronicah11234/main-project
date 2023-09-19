<!DOCTYPE html>
<html>
<head>
    <title>Email Verification</title>
</head>
<body>
    <h2>Hello {{ $user->username }},</h2>
    <p>Thank you for signing up! Please verify your email by clicking the link below:</p>
    <a href="{{ $verificationLink }}">Verify Email</a>
    {{-- <a href="{{ route('verify.email', ['token' => $user->verification_token]) }}">Verify Email</a> --}}
</body>
</html>
