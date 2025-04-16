# 🔐 Brute-Force Detection Lab: Hydra + Snort + Wireshark

This project simulates a brute-force attack on a web login form and demonstrates how to detect and analyze it using Snort IDS and Wireshark.

---

## 🧪 Lab Setup

- **pfSense**: Configured as a firewall and IDS
- **Snort**: Installed on pfSense, configured to detect brute-force and web scanning
- **Ubuntu VM**: Acts as attacker (Hydra) and web server (Nginx + PHP)
- **VirtualBox**: Used to simulate network with multiple virtual machines
- **Wireshark**: Used to capture and analyze login attempts

---

## 🚨 Attack Simulation

### 🔨 Tools Used
- **Hydra**: For brute-forcing login form credentials
- **Nmap**: For initial port scanning
- **Rockyou.txt**: Common password list

### 💥 Scenario

1. Login portal hosted on Nginx using PHP (`index.php`)
2. Hydra brute-forces login:
   ```bash
   hydra -l admin -P rockyou.txt 192.168.1.10 http-post-form "/index.php:username=^USER^&password=^PASS^:Login Failed" -V
