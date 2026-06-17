import {gsap} from "gsap";

// For specific plugins (if needed)
import { ScrollTrigger } from "gsap/ScrollTrigger";
import { TextPlugin } from "gsap/TextPlugin";
import { SplitText } from "gsap/SplitText";


// Register plugins
gsap.registerPlugin(ScrollTrigger, TextPlugin, SplitText);


document.addEventListener('DOMContentLoaded', function() {
    document.fonts.ready.then(function() {


        //convertem landing page animation
        const animateConvertEmSection = () => {
            const section = document.querySelector('.convertem-section');

            if (!section) return;

            // Initial states
            gsap.set('.convertem-logo', {
                opacity: 0,
                scale: 0.7
            });

            gsap.set('.convertem-badge', {
                opacity: 0,
                y: 30
            });

            gsap.set('.convertem-text', {
                opacity: 0,
                y: 40
            });

            gsap.set('.convertem-launch', {
                opacity: 0,
                y: 40
            });


            // Split title
            const splitTitle = new SplitText('.convertem-title', {
                type: 'words'
            });

            gsap.set(splitTitle.words, {
                opacity: 0,
                y: 80
            });

            const tl2 = gsap.timeline({
                scrollTrigger: {
                    trigger: section,
                    start: "top 80%",
                    toggleActions: "play none none none",
                    once: true,
                    markers: false
                }
            });

            tl2
                .to('.convertem-logo', {
                    opacity: 1,
                    scale: 1,
                    duration: 1,
                    ease: "back.out(1.7)"
                })

                .to('.convertem-badge', {
                    opacity: 1,
                    y: 0,
                    duration: 0.6,
                    ease: "power2.out"
                }, "-=0.4")

                .to(splitTitle.words, {
                    opacity: 1,
                    y: 0,
                    stagger: 0.05,
                    duration: 0.8,
                    ease: "power3.out"
                }, "-=0.2")

                .to('.convertem-text', {
                    opacity: 1,
                    y: 0,
                    stagger: 0.15,
                    duration: 0.6,
                    ease: "power2.out"
                }, "-=0.3")

                .to('.convertem-launch', {
                    opacity: 1,
                    y: 0,
                    duration: 0.6,
                    ease: "power2.out"
                }, "-=0.2");

            // Floating logo effect
            gsap.to('.convertem-logo img', {
                y: -10,
                duration: 2,
                repeat: -1,
                yoyo: true,
                ease: "sine.inOut"
            });
        };

        animateConvertEmSection();


    });// end    document.fonts.ready
});//end DOMContentLoaded
