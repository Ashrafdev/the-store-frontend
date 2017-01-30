<form class="form-horizontal" role="form" enctype="multipart/form-data" id="UpdateItemByUser" v-on:submit.prevent>

    <fieldset title="Step1" class="step" id="default-step-0" style="display: block;">
        <legend>Item Details</legend>
        <!-- Name Field -->
        <div class="form-group">
            <label class="col-xs-2 control-label">Name</label>
            <div class="col-xs-10">
                <input type="text" name="name" class="form-control" placeholder="Name" required>
            </div>
        </div>

        <!-- Description Field -->
        <div class="form-group">
            <label class="col-xs-2 control-label">Description</label>
            <div class="col-xs-10">
                <textarea v-model="u_description" type="text" name="description" class="form-control" placeholder="Description" required></textarea>
            </div>
        </div>

        <!-- Price Field -->
        <div class="form-group">
            <label class="col-xs-2 control-label">Price</label>
            <div class="col-xs-10 input-group">
                <span class="input-group-addon">RM</span>
                <input type="number" v-model="u_price" name="price" class="form-control" placeholder="Price" required>
            </div>
        </div>

        <!-- Img  -->
        <div class="form-group">
            <label class="col-xs-2 control-label">Image</label>
            <div class="col-lg-4">
                <input type="file" name="edit_item_image" class="form-control-file btn btn-white btn-file" required>
            </div>
        </div>

        <!-- Item Categories Id Field -->
        <div class="form-group">
            <label class="col-xs-2 control-label">Item Categories</label>
            <div class="col-xs-10">
                <select name="item_categories_id" class="form-control" required>
                    <option value="1">Watchs</option>
                    <option value="2">Watchs</option>
                    <option value="3">Others</option>
                </select>
            </div>
        </div>

    </fieldset>

    <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            <button v-on:click="UpdateItemByUser" class="btn btn-primary">
                Submit
            </button>
        </div>
    </div>
</form>