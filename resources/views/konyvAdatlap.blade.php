@extends('layouts.master')
@section('content')
    <h1>Itt lesz a könyvek adatlapja</h1>

    <div class="container my-3">
        <div class="row">
            <div class="col-6">
                <div class="bg-light border p-3 rounded">
                    <form method="post">
                        @csrf
                        <div>
                            <label for="cim">Könyv címe:</label>
                            <input type="text" name="cim" id="cim" class="form-control">
                            @error('cim')
                                <div class="alert alert-danger">
                                    {{$message}}
                                </div>
                            @enderror
                            
                        </div>

                        <div class="mt-3">
                            <label for="szerzo">Könyv szerzője:</label>
                            <input type="text" name="szerzo" id="szerzo" class="form-control">
                            @error('szerzo')
                                <div class="alert alert-danger">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>

                        <div class="mt-3">
                            <label for="isbn">ISBN szám: </label>
                            <input type="text" name="isbn" id="isbn" class="form-control">
                            @error('isbn')
                                <div class="alert alert-danger">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>

                        <div class="mt-3">
                            <div class="row">
                                <div class="col">
                                    <label for="kiadasi_ev">Kiadási év:</label>
                                    <input type="number" name="kiadasi_ev" id="kiadasi_ev" class="form-control">
                                    @error('kiadasi_ev')
                                        <div class="alert alert-danger">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col">
                                    <label for="oldalszam">Oldalak száma:</label>
                                    <input type="number" name="oldalszam" id="oldalszam" class="form-control">
                                    @error('oldalszam')
                                        <div class="alert alert-danger">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>


                        <div class="mt-3">
                            <button type="submit" class="btn btn-primary w-100">Könyv adatok mentése</button>
                        </div>

                    </form>
                </div>
            </div>
            <div class="col-6">
                <div></div>
            </div>
        </div>
    </div>

@endsection