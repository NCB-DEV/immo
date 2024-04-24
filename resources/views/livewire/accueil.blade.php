<div>
<div style="width: 100%;z-index:10000000000000000000">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-3 col-lg-3 border"></div>
            <div class="col-sm-12 col-md-6 col-lg-6 border">
                <div class="input-group mb-3">
                    <input style="margin-top: 20px"  type="text" wire:model="recherche" placeholder="Récherchez une maison ici" aria-label="Recipent's username" aria-describedby="basic-addon2" class="form-control mt-50">
                    <span class="input-group-text" id="basic-addon2">@</span>
                </div>
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3 border"></div>
        </div>
    </div>
    {{ $recherche }}
</div>
