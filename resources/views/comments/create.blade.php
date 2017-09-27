<hr>
<form method="POST" action="/comments/add/post/{{$post->id}}">
    {{csrf_field()}}
    <div class="card">
        <div class="card-block">
            <form>

                @auth
                    <div class="form-group">
                    <textarea name="body" placeholder="Add coment here." class="form-control">

                    </textarea><br>
                        <button type="submit" class="btn btn-primary">add comment</button>
                    </div>
                @endauth

                @guest
                    <div class="form-group">
                    <textarea name="body" placeholder="Add coment here." class="form-control">

                    </textarea><br>
                        <button type="submit" class="btn btn-primary">add comment</button>
                        <div class="unregistred-user">
                            <span class="warning-message">To add message login :</span>
                            <div class="social-links">
                                <a href="/login/vk" class="vk"></a>
                                <a href="/login/fb" class="fb"></a>
                                <a href="/login/twitter" class="twitt"></a>
                                <a href="/login/gmail" class="goo"></a>
                                <a href="/login/ok" class="ok"></a>
                            </div>
                        </div>

                    </div>
                @endguest

            </form>
        </div>
    </div>
@if(count($errors))
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif