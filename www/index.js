// Fonction pour ajouter la classe .visible

function handleIntersect(entries, observer) {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.remove('hidden');
        entry.target.classList.remove('left');
        entry.target.classList.remove('right');
        entry.target.classList.add('visible');
        observer.unobserve(entry.target); // Optionnel: arrête d'observer une fois visible
      }
    });
  }
  
  // Options de l'IntersectionObserver
  let options = {
    root: null, // viewport
    threshold: 0.1, // Ajustez selon le besoin
  };
  
  // Création de l'IntersectionObserver
  let observer = new IntersectionObserver(handleIntersect, options);
  
  // Ciblage des éléments à observer
  document.querySelectorAll('.hidden').forEach((section) => {
    
    observer.observe(section);
  });
  