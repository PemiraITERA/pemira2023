$(document).ready(function() {
    let inputCount = 0;

    $("#addInput").click(function() {
      inputCount++;
      const inputField = `
        <div class="mb-4">
          <input type="text" name="input_${inputCount}" placeholder="Input ${inputCount}" class="border rounded px-3 py-2">
          <button type="button" class="removeInput bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Hapus</button>
        </div>
      `;
      $("#inputContainer").append(inputField);
    });

    $(document).on("click", ".removeInput", function() {
      $(this).parent().remove();
      inputCount--;
    });

    $("#dynamicForm").submit(function(event) {
      event.preventDefault();
      // Lakukan sesuatu dengan data formulir yang dikumpulkan di sini
      const formData = $(this).serializeArray();
      console.log(formData);
    });
  });
