
    @if (session()->has('add'))
        <script>
            window.onload = function() {
                notif({
                    msg: "{{ trans('Dashboard/messages.add') }}",
                    type: "success"
                });
            }

        </script>
    @endif

    @if (session()->has('edit'))
        <script>
            window.onload = function() {
                notif({
                    msg: "{{ trans('Dashboard/messages.edit') }}",
                    type: "success"
                });
            }

        </script>
    @endif

    @if (session()->has('delete'))
        <script>
            window.onload = function() {
                notif({
                    msg: "{{ trans('Dashboard/messages.delete') }}",
                    type: "success"
                });
            }

        </script>
    @endif
