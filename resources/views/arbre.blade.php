
    @include('_includes.menu')
    <div class="container">
        <div class="tree">
            <ul>
                <li>
                    <a href="#">{{session('user_name')}}</a>
                    <ul>
                        @foreach ($rows as $user )
                            <li>
                                <a href="#">{{$user->PRENOM}}</a>
                            </li>
                        @endforeach
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</body>

</html>
<!-- partial -->
<script  src="{{asset('assets/js/script.js')}}"></script>

</body>
</html>
