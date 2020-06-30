<form action="/notifications" method="post">
    @csrf
   task <input type="text" name="task">
    <button type="submit" class="btn btn-dark">send</button>
</form>
