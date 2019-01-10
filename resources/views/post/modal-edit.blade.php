<form class="form-horizontal" role="form" id="editForm">
    <div class="form-group">
        <label class="control-label col-sm-4" for="tanggal">Tanggal Lapor :</label>
        <div class="col-sm-6">
            <input type="hidden" name="id" value="{{ $data->id }}">
            <input type="date" class="form-control" id="tanggal" name="w_tanggal"
                   required value="{{ $data->tanggal_lapor }}">
            <p class="error text-center alert alert-danger hidden"></p>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-4" for="mulai">Start :</label>
        <div class="col-sm-6">
            <input type="date" class="form-control" id="mulai" name="w_mulai"
                   required value="{{ $data->w_mulai }}">
            <p class="error text-center alert alert-danger hidden"></p>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-4" for="selesai">Done :</label>
        <div class="col-sm-6">
            <input type="date" class="form-control" id="selesai" name="w_selesai"
                   required value="{{ $data->w_selesai }}">
            <p class="error text-center alert alert-danger hidden"></p>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-4" for="pakai">Elapsed :</label>
        <div class="col-sm-6">
            <input type="date" class="form-control" id="pakai" name="w_pakai"
                   required value="{{ $data->w_pakai }}">
            <p class="error text-center alert alert-danger hidden"></p>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-4" for="cp">Contact Person :</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" id="cp" name="cp"
                   required value="{{ $data->cp }}">
            <p class="error text-center alert alert-danger hidden"></p>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-4" for="product">Product :</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" id="product" name="product"
                   required value="{{ $data->product }}">
            <p class="error text-center alert alert-danger hidden"></p>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-4" for="priority">Priority :</label>
        <div class="col-sm-6">
            <select name="priority" class="form-control">
                @if($data->priority == "High")
                    <option value="High" selected >High</option>
                @endif
                @if($data->priority == "Medium")
                    <option value="Medium" selected >Medium</option>
                @endif
                @if($data->priority == "Low")
                    <option value="Low" selected >Low</option>
                @endif
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-4" for="status">Status :</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" id="status" name="status"
                   required value="{{ $data->status }}">
            <p class="error text-center alert alert-danger hidden"></p>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-4" for="topic">Topic :</label>
        <div class="col-sm-6">
            <textarea class="form-control" id="topic" name="topic" rows="3"
                      required>{{ $data->topic }}</textarea>
            <p class="error text-center alert alert-danger hidden"></p>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-4" for="issue">Issue Description :</label>
        <div class="col-sm-6">
            <textarea class="form-control" id="issue" name="issue_desc" rows="6"
                      required>{{ $data->issue_desc }}</textarea>
            <p class="error text-center alert alert-danger hidden"></p>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-4" for="problem">Problem Solving :</label>
        <div class="col-sm-6">
            <textarea class="form-control" id="problem" name="prob_solv" rows="6"
                      required>{{ $data->prob_solv }}</textarea>
            <p class="error text-center alert alert-danger hidden"></p>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-4" for="tech">Technician :</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" id="tech" name="tech"
                   required value="{{ $data->tech }}">
            <p class="error text-center alert alert-danger hidden"></p>
        </div>
    </div>
</form>