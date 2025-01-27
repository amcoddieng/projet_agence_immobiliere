<!-- Ajout du lien vers AOS CSS -->
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

<style>
    .search {
        position: relative;
        background-size: cover;
        background-position: center;
        height: 50vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .search .form-container {
        background: rgba(255, 255, 255, 0.9);
        border-radius: 8px;
        padding: 20px;
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 15px;
        width: 90%;
        max-width: 1200px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    }

    .search .form-container input,
    .search .form-container select {
        width: 100%;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
        outline: none;
        font-size: 14px;
    }

    .search .form-container button {
        grid-column: span 3;
        padding: 12px;
        background: #009fe3;
        color: white;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
        transition: background 0.3s ease;
    }

    .search .form-container button:hover {
        background: #0b64c3;
    }

    .search .form-container .more-options {
        grid-column: span 3;
        text-align: right;
        font-size: 14px;
        color: #555;
        cursor: pointer;
    }

    /* Responsiveness */
    @media (max-width: 768px) {
        .search .form-container {
            grid-template-columns: 1fr;
            margin-top: 60%;
        }

        .search .form-container button {
            grid-column: span 1;
        }

        .search .form-container .more-options {
            text-align: left;
            grid-column: span 1;
        }
    }
</style>

<div class="search mb-5">
    <form class="form-container mt-5" data-aos="fade-up" data-aos-duration="1000">
        <input type="text" name="keywords" placeholder="Mots-clés" data-aos="fade-up" data-aos-delay="100">
        <select name="property_type" data-aos="fade-up" data-aos-delay="200">
            <option value="">Type de propriété</option>
            <option value="villa">Villa</option>
            <option value="appartement">Appartement</option>
            <option value="bureau">Bureau</option>
        </select>
        <input type="text" name="city" placeholder="Ville" data-aos="fade-up" data-aos-delay="300">
        <select name="rooms" data-aos="fade-up" data-aos-delay="400">
            <option value="">Chambre(s)</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6 ou plus</option>
        </select>
        <input type="number" name="min_price" placeholder="Prix Min (FCFA)" data-aos="fade-up" data-aos-delay="500">
        <input type="number" name="max_price" placeholder="Prix Max (FCFA)" data-aos="fade-up" data-aos-delay="600">
        <button type="submit" data-aos="fade-up" data-aos-delay="700">Rechercher</button>
    </form>
</div>

<!-- Ajout du script JavaScript pour AOS -->
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init();
</script>
