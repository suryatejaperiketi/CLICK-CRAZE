




$(document).ready(function () {
    var menuItem = $('.why li'),
        imgItem = $('.why img'),
        textItem = $('.text__item');
    
    // Ensure the first items are properly active on page load
    menuItem.removeClass('active');
    textItem.removeClass('active');
    imgItem.removeClass('active desactive active--animation');
    
    // Set the first item as active
    $('li:first-of-type').addClass('active');
    $('.text__item:first-of-type').addClass('active');
    $('.why img:first-of-type').addClass('active');
    
    // On menu item click
    menuItem.on('click', function () {
      menuItem.not($(this)).removeClass('active');
      textItem.not('.' + $(this).attr('data-target') + '-text').removeClass('active');
    
      // Handle the current active image
      var currentActiveImg = $('.why img.active');
      if (!$('.' + $(this).attr('data-target') + '-img').hasClass('active')) {
        currentActiveImg.removeClass('active').addClass('active--animation'); // Move the current active image forward
        setTimeout(function () {
          currentActiveImg.removeClass('active--animation'); // Reset the class after the animation
        }, 2000); // Match the animation duration in keyframes
    
        $('.' + $(this).attr('data-target') + '-img').addClass('active'); // Set the target image as active
      }
    
      $(this).addClass('active');
      $('.' + $(this).attr('data-target') + '-text').addClass('active');
    });
    });
    
    


document.addEventListener('DOMContentLoaded', () => {
const playButton = document.getElementById('playButton');
const pauseButton = document.getElementById('pauseButton');
const videoContainer = document.getElementById('videoContainer');
const videoPlayer = document.getElementById('videoPlayer');
const imageBox = document.querySelector('.image-box');

// Play the video on button click
playButton.addEventListener('click', (event) => {
    event.preventDefault();  // Prevent default link behavior
    
    // Hide the image and play button
    imageBox.style.display = 'none';
    
    // Show the video container and pause button
    videoContainer.style.display = 'block';
    pauseButton.style.display = 'block';
    
    // Play the video
    videoPlayer.play();
    
    // Hide the play button after the video starts
    playButton.style.display = 'none';
});

// Pause the video on pause button click
pauseButton.addEventListener('click', (event) => {
    event.preventDefault();
    
    // Pause the video
    videoPlayer.pause();
    
    // Hide the pause button and show the play button
    pauseButton.style.display = 'none';
    playButton.style.display = 'block';
});

// Toggle between play and pause when the video is clicked
videoPlayer.addEventListener('click', () => {
    if (videoPlayer.paused) {
        videoPlayer.play();
        playButton.style.display = 'none';
        pauseButton.style.display = 'block';
    } else {
        videoPlayer.pause();
        playButton.style.display = 'block';
        pauseButton.style.display = 'none';
    }
});
});
           


document.addEventListener("DOMContentLoaded", () => {
const galleryItems = document.querySelectorAll(".gallery-item");

const fadeUpEffect = () => {
galleryItems.forEach((item, index) => {
const itemPosition = item.getBoundingClientRect().top;
const screenPosition = window.innerHeight;

if (itemPosition < screenPosition) {
setTimeout(() => {
item.classList.add("fade-up");
}, index * 200); // Stagger the animation
}
});
};

window.addEventListener("scroll", fadeUpEffect);
fadeUpEffect(); // Trigger on load in case some items are already visible
});




document.addEventListener("DOMContentLoaded", () => {
const toggleButton = document.getElementById("toggle-button");
const hiddenItems = document.querySelectorAll(".partner-item.hidden");
const partnerSection = document.querySelector(".sponsors-section");
const partnerItems = document.querySelectorAll(".partner-item img");
let isExpanded = false;

// Toggle button functionality
toggleButton.addEventListener("click", () => {
isExpanded = !isExpanded;

if (isExpanded) {
hiddenItems.forEach((item) => item.classList.add("show")); // Show with animation
toggleButton.textContent = "See Less -"; // Update button text
} else {
hiddenItems.forEach((item) => item.classList.remove("show")); // Hide with animation
toggleButton.textContent = "See More +"; // Update button text
}
});

// Initial button text
toggleButton.textContent = "See More +";

// Use Intersection Observer to detect when the section is in view
const observer = new IntersectionObserver(
(entries) => {
entries.forEach((entry) => {
 if (entry.isIntersecting) {
     // Section is in view, apply zoom effect
     partnerItems.forEach((img) => {
         img.style.transition = "transform 0.5s ease";
         img.style.transform = "scale(1.1)"; // Adjust scale as needed
     });
 } else {
     // Section is out of view, reset zoom effect
     partnerItems.forEach((img) => {
         img.style.transform = "scale(1)";
     });
 }
});
},
{
root: null, // Default is the viewport
threshold: 0.1, // Trigger when 10% of the section is visible
}
);

// Observe the sponsors section
observer.observe(partnerSection);
});



                        // Wait for the DOM to load
                        document.addEventListener("DOMContentLoaded", () => {
                            const icons = document.querySelectorAll(".icon-box");
                            const section = document.querySelector(".services-section-two");
                        
                            const observer = new IntersectionObserver((entries) => {
                                entries.forEach((entry) => {
                                    if (entry.isIntersecting) {
                                        icons.forEach((icon) => {
                                            icon.classList.add("bounce");
                                        });
                                        setTimeout(() => {
                                            icons.forEach((icon) => {
                                                icon.classList.remove("bounce"); // Stop bouncing after animation
                                            });
                                        }, 2000); // Adjust duration as needed
                                    }
                                });
                            });
                        
                            observer.observe(section);
                        });
                        
                    
                
                        document.getElementById('newsletterForm').addEventListener('submit', async function (e) {
                            e.preventDefault(); // Prevent the default form submission behavior
                    
                            const form = e.target;
                            const formData = new FormData(form);
                    
                            try {
                                const response = await fetch(form.action, {
                                    method: form.method,
                                    body: formData,
                                });
                    
                                if (response.ok) {
                                    alert('Thank you for subscribing to our newsletter!');
                                    form.reset(); // Clear the email input field
                                } else {
                                    alert('Failed to subscribe. Please try again later.');
                                }
                            } catch (error) {
                                console.error('Error submitting the form:', error);
                                alert('An error occurred. Please try again.');
                            }
                        });
                
                  


                    
                        (function() {
                          emailjs.init("U6Ws4hwyfL0us9Y8U"); // Initialized with your Public Key
                        })();
                      
                        document.getElementById("contact-form").addEventListener("submit", function(event) {
                          event.preventDefault(); // Prevent default form submission
                      
                          // Collect form data
                          const formData = {
                            username: document.getElementById("username").value,
                            email: document.getElementById("email").value,
                            phone: document.getElementById("phone").value,
                            subject: document.getElementById("subject").value,
                            message: document.getElementById("message").value
                          };
                      
                          // Send email using EmailJS
                          emailjs.send("service_p0e28cp", "template_iz6ptjo", formData)
                          .then(function(response) {
                            alert("✅ Message sent successfully!");
                            document.getElementById("contact-form").reset(); // Reset form
                          }, function(error) {
                            alert("❌ Error sending message! Check the console.");
                            console.error("EmailJS Error:", error);
                          });
                        });
                      
                     

   