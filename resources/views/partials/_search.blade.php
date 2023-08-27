<form action="/">
    <div class="container">
        <div class="input-group mb-3">
            <input type="text" name="search" class="form-control" placeholder="Search Product" aria-label="Recipient's username" aria-describedby="button-addon2" value="{{ request('search') }}">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit" id="button-addon2">Search</button>
                @if(request('search'))
                    <a href="/" class="btn btn-danger">
                        <i class="fas fa-times-circle"></i>
                    </a>
                @endif
            </div>
        </div>
    </div>
</form>


