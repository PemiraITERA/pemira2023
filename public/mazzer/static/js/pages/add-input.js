$(document).ready(function () {

    // Memeriksa apakah ada data dalam localStorage untuk misi
    if (localStorage.getItem('misi')) {
        $('#input-container-misi').html(localStorage.getItem('misi'));
    }

    $('#addInputMisi').on('click', function () {
        let inputCount = $('#input-container-misi .dynamic-input-misi').length;
        let newInput =  `
            <div class="row dynamic-input-misi">
                <div class="col-md-12 col-12">
                    <div class="form-group mandatory">
                        <label for="misi${inputCount + 1}" class="form-label">Misi ${inputCount + 1}</label>
                        <textarea name="misi${inputCount + 1}" class="form-control" placeholder="Masukkan Misi ${inputCount + 1}" value="{{ old('misi${inputCount + 1}') }}" rows="5" style="resize: none"></textarea>
                    </div>
                </div>
            </div>
            `;
        $('#input-container-misi').append(newInput);

        // Simpan data input ke localStorage
        localStorage.setItem('misi', $('#input-container-misi').html());

        // Tambah input count ke dalam input tipe hidden
        $('#misiCount').val(inputCount + 1);
    });

    $('#removeInputMisi').on('click', function () {
        $('#input-container-misi .dynamic-input-misi:last-child').remove();

        // Simpan data input ke localStorage
        localStorage.setItem('misi', $('#input-container-misi').html());

        let inputCount = $('#input-container-misi .dynamic-input-misi').length;
        // Update nilai input count ke dalam input tipe hidden
        $('#misiCount').val(inputCount);
    });

    // Memeriksa apakah ada data dalam localStorage untuk progja
    if (localStorage.getItem('progja')) {
        $('#input-container-progja').html(localStorage.getItem('progja'));
    }

    $('#addInputProgja').on('click', function () {
        let inputCount = $('#input-container-progja .dynamic-input-progja').length;
        let newInput =  `
            <div class="row dynamic-input-progja">
                <div class="col-md-12 col-12">
                    <div class="form-group mandatory">
                        <label for="progja${inputCount + 1}" class="form-label">Program Kerja ${inputCount + 1}</label>
                        <textarea name="progja${inputCount + 1}" class="form-control" placeholder="Masukkan program Keja ${inputCount + 1}" rows="5" style="resize: none">{{ old('progja${inputCount + 1}') }}</textarea>
                    </div>
                </div>
            </div>
            `;
        $('#input-container-progja').append(newInput);

        // Simpan data input ke localStorage
        localStorage.setItem('progja', $('#input-container-progja').html());

        // Tambah input count ke dalam input tipe hidden
        $('#progjaCount').val(inputCount + 1);
    });

    $('#removeInputProgja').on('click', function () {
        $('#input-container-progja .dynamic-input-progja:last-child').remove();

        // Simpan data input ke localStorage
        localStorage.setItem('progja', $('#input-container-progja').html());

        let inputCount = $('#input-container-progja .dynamic-input-progja').length;
        // Update nilai input count ke dalam input tipe hidden
        $('#progjaCount').val(inputCount);
    });

});



document.getElementById('closeButton').addEventListener('click', function() {
    document.getElementById('errorAlert').style.display = 'none';
});

