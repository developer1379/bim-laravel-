
// Auto Increment Start
document.addEventListener("DOMContentLoaded", () => {
  const counters = [
    { id: "students", value: 8000, addPlus: true },
    { id: "campus", value: 20, addPlus: false }, // No '+' sign for this section
    { id: "alumni", value: 20000, addPlus: true },
    { id: "recruiters", value: 2000, addPlus: true },
  ];

  const startCounter = (element, value, addPlus) => {
    let start = 0;
    const duration = 2000; // Animation duration in milliseconds
    const increment = value / (duration / 16); // Increment per frame

    const updateCounter = () => {
      start += increment;
      if (start >= value) {
        element.textContent = addPlus ? `${value}+` : value; // Final value with or without +
      } else {
        element.textContent = addPlus
          ? `${Math.floor(start)}+`
          : Math.floor(start); // Incremented value
        requestAnimationFrame(updateCounter);
      }
    };

    updateCounter();
  };

  const observerOptions = {
    threshold: 0.5, // Trigger when 50% of the section is visible
  };

  const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        // Start counters for visible section
        counters.forEach((counter) => {
          const element = document.getElementById(counter.id);
          if (
            !element.textContent.includes("+") &&
            element.textContent === "0"
          ) {
            // Start only if not already started
            startCounter(element, counter.value, counter.addPlus);
          }
        });

        observer.unobserve(entry.target); // Stop observing once triggered
      }
    });
  }, observerOptions);

  // Observe the section
  const section = document.querySelector(".bit-data");
  observer.observe(section);
});

// Auto Increment Ends
