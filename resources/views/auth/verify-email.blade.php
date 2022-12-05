<x-guest-layout>
    <div class="card-body login-card-body">
        <p>Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we
            just emailed to you? If you didn't receive the email, we will gladly send you another.</p>

        @if (session('status') == 'verification-link-sent')
            <div class="alert alert-success" role="alert">
                A new verification link has been sent to the email address you provided during registration.
            </div>
        @endif

        <form action="{{ route('verification.send') }}" method="post">
            @csrf


            <div class="row">
                <div class="col-12">
                    <button type="submit" class="btn btn-primary btn-block">
                        Resend Verification Mail
                    </button>
                </div>
                <!-- /.col -->
            </div>
        </form>

        <form action="{{ route('logout') }}" method="post" class="mt-2">
            @csrf
            <div class="row">
                <div class="col-12">
                    <button type="submit" class="btn btn-primary btn-block">
                        Log Out
                    </button>
                </div>
                <!-- /.col -->
            </div>
        </form>
    </div>
    <!-- /.login-card-body -->
</x-guest-layout>
