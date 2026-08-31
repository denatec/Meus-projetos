"use client";

import { motion } from "framer-motion";

type ParticleType =
  | "circle"
  | "square"
  | "diamond"
  | "star"
  | "pentagon";

interface Particle {
  id: number;
  type: ParticleType;
  left: string;
  size: number;
  color: string;
  duration: number;
  delay: number;
  drift: number;
}

const colors = [
  "#7c3aed", // Roxo
  "#a855f7", // Purple
  "#ec4899", // Rosa
  "#f59e0b", // Laranja
  "#fbbf24", // Amarelo
  "#22d3ee", // Azul
];

const types: ParticleType[] = [
  "circle",
  "square",
  "diamond",
  "star",
  "pentagon",
];

const particles: Particle[] = Array.from(
  { length: 100 },
  (_, index) => ({
    id: index,
    type: types[Math.floor(Math.random() * types.length)],
    left: `${Math.random() * 100}%`,
    size: Math.floor(Math.random() * 14) + 6,
    color: colors[Math.floor(Math.random() * colors.length)],
    duration: Math.random() * 20 + 20,
    delay: Math.random() * -20,
    drift: Math.random() * 80 - 40,
  })
);

function ParticleShape({
  type,
  size,
  color,
}: {
  type: ParticleType;
  size: number;
  color: string;
}) {
  // ⭐ ESTRELA DE 5 PONTAS
  if (type === "star") {
    return (
      <span
        style={{
          display: "block",
          width: size * 1.5,
          height: size * 1.5,
          backgroundColor: color,

          clipPath:
            "polygon(50% 0%, 61% 35%, 98% 35%, 68% 57%, 79% 91%, 50% 70%, 21% 91%, 32% 57%, 2% 35%, 39% 35%)",

          boxShadow: `0 0 10px ${color}`,
          filter: `drop-shadow(0 0 6px ${color})`,
        }}
      />
    );
  }

if (type === "pentagon") {
  return (
    <svg
      width={size * 2}
      height={size * 2}
      viewBox="0 0 100 100"
      style={{
        filter: `drop-shadow(0 0 6px ${color})`,
      }}
    >
      <polygon
        points="50,5 95,38 78,92 22,92 5,38"
        fill="transparent"
        stroke={color}
        strokeWidth="6"
      />
    </svg>
  );
}

  // ○ CÍRCULO
  if (type === "circle") {
    return (
      <span
        style={{
          display: "block",
          width: size,
          height: size,
          borderRadius: "50%",
          border: `2px solid ${color}`,

          boxShadow: `
            0 0 6px ${color},
            0 0 15px ${color}
          `,
        }}
      />
    );
  }

  // ◇ DIAMANTE
  if (type === "diamond") {
    return (
      <span
        style={{
          display: "block",
          width: size,
          height: size,
          backgroundColor: color,
          transform: "rotate(45deg)",
          boxShadow: `0 0 8px ${color}`,
        }}
      />
    );
  }

  // ■ QUADRADO
  return (
    <span
      style={{
        display: "block",
        width: size,
        height: size,
        backgroundColor: color,
        boxShadow: `0 0 8px ${color}`,
      }}
    />
  );
}
export default function AnimatedBackground() {
  return (
    <div className="absolute inset-0 z-0 overflow-hidden pointer-events-none bg-[#080617]">
      
      {/* Glow no fundo */}
      <div className="absolute left-[10%] top-[20%] h-[300px] w-[300px] rounded-full bg-purple-600/10 blur-[120px]" />

      <div className="absolute right-[10%] bottom-[10%] h-[350px] w-[350px] rounded-full bg-blue-600/10 blur-[150px]" />

      {/* Partículas */}
      {particles.map((particle) => (
        <motion.div
          key={particle.id}
          className="absolute"
          style={{
            left: particle.left,
            bottom: "-30px",
          }}
          initial={{
            y: "110vh",
            opacity: 0,
          }}
          animate={{
            y: "-120vh",
            x: [
              0,
              particle.drift,
              -particle.drift / 2,
              particle.drift,
            ],
            opacity: [0, 0.8, 1, 0.8, 0],
          }}
          transition={{
            y: {
              duration: particle.duration,
              repeat: Infinity,
              ease: "linear",
              delay: particle.delay,
            },
            x: {
              duration: particle.duration / 2,
              repeat: Infinity,
              repeatType: "mirror",
              ease: "easeInOut",
            },
            opacity: {
              duration: particle.duration,
              repeat: Infinity,
              ease: "linear",
              delay: particle.delay,
            },
          }}
        >
          <ParticleShape
            type={particle.type}
            size={particle.size}
            color={particle.color}
          />
        </motion.div>
      ))}
    </div>
  );
}