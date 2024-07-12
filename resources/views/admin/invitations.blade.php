<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>MyDULU WEAR - Invitations</title>
  <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.min.js')}}"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')}}" />
<link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css')}}">
<link rel='stylesheet' href='{{asset('https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.css')}}'>
<link rel="stylesheet" href="{{asset('assets/css/dulu_member_style.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/invitations.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

</head>
<body>

    @include('admin._includes-admin.topnav')

    @include('admin._includes-admin.menu')
   
    <!-- partial:index.partial.html -->
<div class="container2">
        <div class="container-top rows">
            <div class="left col-md-8">
                @if (session('status'))
                    <div id="stats" style="display: block;">
                        {{session('status')}}   
                    </div>
                @endif
                <h2>Suivie les invitations</h2>
                <!--    <p>Vous pouvez envoyer des invitations aussi</p> -->
            </div>
            
        </div>
        <div class="container-body">
            
            <table id="table">
                <tr>
                    <th><input type="checkbox" id="selectAll"></th>
                  <th>Membre</th>
                  <th>Date</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                    @php
                        $i=1
                    @endphp
                    @foreach ($rows as $user )
                        <tr>
                            <td><input type="checkbox" class="user-checkbox" value="{{ $user->id }}"></td>
                            <td>{{$user->NOM}} {{$user->PRENOM}}</td>
                            <td>{{$user->created_at}}</td>
                            <td>{{$user->STATUT}}</td>
                            @if ($user->STATUT == 'EN ATTENTE')
                                <td>
                                    <a href="refuser/{{{$user->id}}}">
                                        <i class="fa fa-thumbs-down" aria-hidden="true" style="color: red;font-size: x-large;"></i>
                                    </a>&nbsp;&nbsp;
                                    <a href="active/{{{$user->id}}}">
                                        <i class="fa fa-thumbs-up" aria-hidden="true" style="color: green;font-size: x-large;"></i>
                                    </a>
                                    
                                </td>
                            @endif
                            
                        </tr>
                    @endforeach
            </table>
            <!-- Pagination -->
            <div class="d-flex justify-content-center mt-5">
                {!! $rows->links() !!}
            </div>

        </div>
    </div>
</body>

</html>
<!-- partial -->
  <script  src="{{asset('assets/js/script.js')}}"></script>
  <script  src="{{asset('assets/js/invitations.js')}}"></script>
  <script>
    displaystat();
    function displaystat(){
        stat=document.getElementById('stats')
        if(stat){
            setTimeout(function() {
                stat.style.display="none";
            }, 3000);
        }
    }
        
    </script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('#selectAll').click(function() {
                $('input:checkbox').not(this).prop('checked', this.checked);
            });

            $('#addToCart').click(function() {
                var selectedUsers = [];
                $('.user-checkbox:checked').each(function() {
                    selectedUsers.push($(this).val());
                });

                // Send the selected product IDs to the server using AJAX or form submission
                console.log(selectedUsers);
            });
        });
    </script>
</body>
</html>
