<div class="container bg-dark text-white rounded mt-5 text-center p-3">
    <div class="row">
        <div class="col">
            <H1>Üdvözöllek az első Házidolgozatomban<br>
            <h4>("tölts ki mindent!!444!44)</h4></H1>
        </div>  
    </div>
</div>
<div class="container bg-success text-white rounded p-3">
    <div class="row">
        <div class="col">
            <form method="POST">
                @csrf
                <div class="mt-3 mb-3">
                    <label for="vezetek">Hogy hívják a vezetéknevedet?</label>
                    <input type="text" name="vezetek" value="{{old('vezetek')}}" id="vezetek" class="form-control">
                    @error('vezetek')
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                @enderror
                </div>
                <div class="mt-3 mb-3">
                    <label for="kereszt">Hogy hívják a keresztnevedet?</label>
                    <input type="text" name="kereszt" value="{{old('kereszt')}}" id="kereszt" class="form-control">
                    @error('kereszt')
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                @enderror
                </div>
                <div class="mt-3 mb-3">
                    <label for="szulev">Melyik évben is születtél? O.o</label>
                    <input type="number" name="szulev" value="{{old('szulev')}}" id="szulev" class="form-control">
                    @error('szulev  ')
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                @enderror
                </div>
                <div class="mt-3 mb-3">
                    <button type="submit" class="btn btn-light">Bekerülök a rendszerbe</button>
                </div>
            </form>
        </div>  
    </div>
</div>