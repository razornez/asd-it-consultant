'use client'
import { Canvas } from '@react-three/fiber'
import { OrbitControls, Environment } from '@react-three/drei'
import { Suspense } from 'react'

type RoomProps = {
  name: string
  position: [number, number, number]
  color: string
}

function Room({ name, position, color }: RoomProps) {
  return (
    <mesh position={position} castShadow>
      <boxGeometry args={[6, 3, 6]} />
      <meshStandardMaterial color={color} />
    </mesh>
  )
}

export default function OfficeLayout() {
  return (
    <div className="w-full h-screen">
      <Canvas camera={{ position: [0, 5, 12], fov: 50 }} shadows>
        <ambientLight intensity={0.3} />
        <directionalLight position={[10, 10, 5]} intensity={1.2} castShadow />

        <Suspense fallback={null}>
          <Environment preset="city" />

          {/* Lantai */}
          <mesh receiveShadow rotation={[-Math.PI / 2, 0, 0]} position={[0, 0, 0]}>
            <planeGeometry args={[50, 50]} />
            <meshStandardMaterial color="#e0e0e0" />
          </mesh>

          {/* Ruangan */}
          <Room name="Meeting Room" position={[-10, 1.5, -10]} color="#93c5fd" />
          <Room name="Manager Room" position={[10, 1.5, -10]} color="#fca5a5" />
          <Room name="Developer Room" position={[-10, 1.5, 10]} color="#bbf7d0" />
          <Room name="Coffee Room" position={[10, 1.5, 10]} color="#fde68a" />
        </Suspense>

        <OrbitControls />
      </Canvas>
    </div>
  )
}
