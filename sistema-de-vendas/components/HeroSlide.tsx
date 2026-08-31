"use client";

import { useEffect, useState } from "react";
import { AnimatePresence, motion } from "framer-motion";

const slides = [
  "/img/frf1.jpg",
  "/img/frf2.jpg",
  "/img/frf3.jpg",
];

export default function HeroSlide() {
  const [currentSlide, setCurrentSlide] = useState(0);

  useEffect(() => {
    const interval = setInterval(() => {
      setCurrentSlide((prev) => (prev + 1) % slides.length);
    }, 6000);

    return () => clearInterval(interval);
  }, []);

  return (
    <div className="absolute inset-0 z-[1] overflow-hidden">
      <AnimatePresence>
        <motion.img
          key={currentSlide}
          src={slides[currentSlide]}
          alt={`Slide ${currentSlide + 1}`}
          initial={{
            opacity: 0,
            scale: 1.02,
          }}
          animate={{
            opacity: 0.55,
            scale: 1,
          }}
          exit={{
            opacity: 0,
            scale: 1.02,
          }}
          transition={{
            duration: 1.8,
            ease: "easeInOut",
          }}
          className="absolute inset-0 h-full w-full object-cover object-center"
        />
      </AnimatePresence>

      {/* Overlay */}
      <div className="absolute inset-0 z-[2] bg-gradient-to-r from-[#080617]/80 via-[#080617]/30 to-[#080617]/70" />
    </div>
  );
}