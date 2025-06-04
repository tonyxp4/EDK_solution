function toggleCampos() {
    const tipo = document.getElementById("tipo").value;
    const campos = document.getElementById("camposCriador");
    campos.style.display = tipo === "criador" ? "block" : "none";
  }

  // Ativa campos ao recarregar, se já estava como criador
  window.onload = toggleCampos;