'use client'
import Link from 'next/link'
import { motion } from 'framer-motion'

export default function Navbar() {
  return (
    <motion.nav
      initial={{ y: -50, opacity: 0 }}
      animate={{ y: 0, opacity: 1 }}
      transition={{ duration: 0.5 }}
      className="fixed top-0 left-0 w-full z-50 bg-white/80 backdrop-blur border-b border-gray-200"
    >
      <div className="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
        <div className="text-xl font-bold text-gray-900">IT Konsultan</div>
        <ul className="flex space-x-6 text-sm font-medium text-gray-800">
          <li><Link href="#" className="hover:text-blue-500 transition">Meeting Room</Link></li>
          <li><Link href="#" className="hover:text-blue-500 transition">Manager Room</Link></li>
          <li><Link href="#" className="hover:text-blue-500 transition">Developer Room</Link></li>
          <li><Link href="#" className="hover:text-blue-500 transition">Coffee Room</Link></li>
        </ul>
      </div>
    </motion.nav>
  )
}