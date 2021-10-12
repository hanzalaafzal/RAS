
<!DOCTYPE html>
<html lang="en">

  @include('admin.inc.header')

  @stack('mycss')

  <body>

    @include('admin.inc.sidebar')

    <div class="page-wrapper">

      @include('admin.inc.navbar')

        @yield('page_content')

    </div>
  </body>

    @include('admin.inc.js')

    @if(session('error'))
        <script>
        const Toast = Swal.mixin({
      toast: true,
      position: 'bottom-end',
      showConfirmButton: false,
      timer: 2000,
      timerProgressBar: true,
      didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
      }
    })

    Toast.fire({
      icon: 'error',
      title:  `{{ session('error') }}`
    });
    </script>
    @endif

    @if(session('success'))
    <script>
        const Toast = Swal.mixin({
      toast: true,
      position: 'bottom-end',
      showConfirmButton: false,
      timer: 3000,
      timerProgressBar: true,
      didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
      }
    })
    Toast.fire({
      icon: 'success',
      title: `{{ session('success')}}`
    });
    </script>
    @endif

    @if(session('permission-error'))
    <script>
    Swal.fire({
      title: 'Permission Denied',
      text: "You donot have enough permission",
      icon: 'error',
      confirmButtonText: 'Close'
    });
    </script>
    @endif

    @stack('myscript')
