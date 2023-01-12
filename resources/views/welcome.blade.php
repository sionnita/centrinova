<div class="border px-4">
    <form method="POST" action="{{url('comment/save')}}">
        @csrf
        <div class="row mb-4">
            <input id="email" name="blog_id" type="text"value="{{$blog -> id}}" class="form-control" hidden="">
            <div class="form-group">
                <label>Name</label>
                <input id="name" name="name" type="text" placeholder="Name" class="form-control">
                <p id="text-pin" class="text-helper text-danger"></p>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input id="email" name="email" type="email" placeholder="Email" class="form-control">
                <p id="text-pin" class="text-helper text-danger"></p>
            </div>
            <div>
                <textarea rows="4" class="form-control border-1 resize-none" placeholder="Your Message..." name="comment"></textarea>
            </div>
        </div>

        <div class="text-end mt-3">
            <button type="submit" class="btn btn-success w-sm text-truncate ms-2"> Send <i class="bx bx-send ms-2 align-middle"></i></button>
        </div>
    </form>
</div>
