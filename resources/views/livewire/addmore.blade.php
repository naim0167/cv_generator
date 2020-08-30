<div>
    {{-- <span wire:click="increment" class="fas fa-plus" style="cursor:pointer;float:right;font-weight:bold"> ADD MORE </span> --}}
    {{-- {{$entry}} --}}

    @for ( $i= 0; $i <$entry ; $i++)
    {{-- <input type="text" name="entry" class="py-2 px-2 border rounded" placeholder="describe"> --}}
    {{-- <div class="form-row">
        <div class="form-group col-md-8">
            <label for="educationalInstitute">Educational Institue Name</label>
            <input type="text" name="educationalInstitute" class="form-control" id="educationalInstitute"
                placeholder="Enter your educational institues name">
        </div>
        <div class="form-group col-md-4">
            <label for="educationCountry">Country</label>
            <input type="text" name="educationCountry" class="form-control" id="educationCountry"
                placeholder="Country Name">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="degreeName">Degree Name</label>
            <input type="text" name="degreeName" class="form-control" id="degreeName"
                placeholder="ex.- Bachelor's/Masters'">
        </div>
        <div class="form-group col-md-6">
            <label for="subjectName">Subject Name</label>
            <input type="text" name="subjectName" class="form-control" id="subjectName"
                placeholder="ex.- Software Engineering">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="educationstart">Start Date</label>
            <input type="date" name="educationstart" class="form-control" id="educationstart" placeholder="Start Date">
        </div>
        <div class="form-group col-md-6">
            <label for="educationend">End Date</label>
            <input type="date" name="educationend" class="form-control" id="educationend"
                aria-describedby="educationendhelp" placeholder="End Date">
            <small id="educationendhelp" class="form-text text-muted">Please don't select it if you are currently
                studing there</small>
        </div>
    </div> --}}
    @endfor
</div>
