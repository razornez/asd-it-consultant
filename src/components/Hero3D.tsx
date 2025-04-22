"use client";
import { Canvas, useFrame } from "@react-three/fiber";
import { OrbitControls, Stars, Environment } from "@react-three/drei";
import { Suspense, useRef } from "react";
import * as THREE from "three";

function SpinningTorus() {
  const meshRef = useRef<THREE.Mesh>(null!);
  useFrame(() => {
    meshRef.current.rotation.x += 0.01;
    meshRef.current.rotation.y += 0.01;
  });

  return (
    <mesh ref={meshRef} position={[0, 0, 0]}>
      <torusKnotGeometry args={[1, 0.4, 100, 16]} />
      <meshStandardMaterial color="#FFD43B" metalness={0.6} roughness={0.2} />
    </mesh>
  );
}

export default function Hero3D() {
  return (
    <div className="w-full h-[500px] md:h-[700px]">
      <Canvas camera={{ position: [0, 0, 5] }}>
        <ambientLight intensity={0.3} />
        <directionalLight position={[5, 5, 5]} intensity={1} />
        <Suspense fallback={null}>
          <Environment preset="sunset" />
          <Stars radius={100} depth={50} count={5000} factor={4} saturation={0} fade />
          <SpinningTorus />
        </Suspense>
        <OrbitControls enableZoom={false} enablePan={false} autoRotate autoRotateSpeed={1.5} />
      </Canvas>
    </div>
  );
}