class ScriptRunner {
    [bool]$App

    ScriptRunner() {
        $this.App = $true
    }

    [void] Run() {
        while ($this.App) {
            $data_action = $this.GetUserConfirmation()
            switch ($data_action) {
                'y' { $this.HandleActionSelection() }
                'n' { $this.HandleExit() }
                '' { $this.HandleExit() }
                Default { $this.HandleExit() }
            }
        }
    }

    [string] GetUserConfirmation() {
        try {
            Clear-Host
            $tmp = ''
            Write-Host "Do you want to do action? "  -ForegroundColor Gray -NoNewline
            Write-Host "[No : n and Yes : y] (Default is NO)"  -ForegroundColor DarkGray -NoNewline
            Write-Host "    " -NoNewline
            $tmp = Read-Host
            Clear-Host
            return $tmp
        } catch {
            Clear-Host
            Write-Host "Incorrect Data! --- Just y/n allowed"  -ForegroundColor Red
            return ''
        }
    }

    [void] HandleActionSelection() {
        $do_action = ''
        $process = $true

        while ($process) {
            try {
                Write-Host "Select Setting Section: " -ForegroundColor Gray -NoNewline
                Write-Host "(Default is Exit)" -ForegroundColor DarkGray
                Write-Host "+ Clear History (c)" -ForegroundColor Blue
                Write-Host "- Set DNS ()" -ForegroundColor Blue
                Write-Host "+ Remove DNS (r)" -ForegroundColor Blue
                Write-Host "+ Exit (e)" -ForegroundColor Blue
                Write-Host "Go to " -ForegroundColor Gray -NoNewline
                Write-Host "    " -NoNewline
                $do_action = Read-Host
                Clear-Host
            } catch {
                Clear-Host
                Write-Host "Incorrect Data! --- Just y/n allowed" -BackgroundColor Black -ForegroundColor Red
            }

            switch ($do_action) {
                'c' { $this.ClearHistory() }
                'r' {$this.ClearDNS()}
                'e' { $this.HandleExit() }
                ''  { $this.HandleExit() }
                Default { $this.HandleExit() }
            }
        }
    }

    [void] SetDNS($pdns = "1.1.1.1", $adns = "8.8.8.8") {
        Write-Host "==================== Log ====================" -BackgroundColor DarkYellow -ForegroundColor Black
        Write-Host "[$(Get-Date -Format 'HH:mm:ss')] Requesting access to the system..." -BackgroundColor DarkCyan -ForegroundColor White
        Set-ExecutionPolicy -ExecutionPolicy Unrestricted -Scope CurrentUser -Force -WarningAction SilentlyContinue
        Write-Host "[$(Get-Date -Format 'HH:mm:ss')] Access granted." -BackgroundColor DarkCyan -ForegroundColor White
        Write-Host "[$(Get-Date -Format 'HH:mm:ss')] Set DNS..." -BackgroundColor DarkCyan -ForegroundColor White
        for ($i = 0; $i -le 50; $i++)
        { 
            Set-DnsClientServerAddress -InterfaceIndex $i -ServerAddresses @($pdns, $adns) -WarningAction Ignore -ErrorAction SilentlyContinue
        }
        Write-Host "[$(Get-Date -Format 'HH:mm:ss')] Setup DNS." -BackgroundColor DarkCyan -ForegroundColor White
        Write-Host "[$(Get-Date -Format 'HH:mm:ss')] Releasing access..." -BackgroundColor DarkCyan -ForegroundColor White
        Set-ExecutionPolicy -ExecutionPolicy RemoteSigned -Scope CurrentUser -Force -WarningAction SilentlyContinue
        Write-Host "[$(Get-Date -Format 'HH:mm:ss')] Access released." -BackgroundColor DarkCyan -ForegroundColor White
        Write-Host "[$(Get-Date -Format 'HH:mm:ss')] Done" -BackgroundColor White -ForegroundColor DarkGreen


        Write-Host "Incorrect Internet Protocol!" -BackgroundColor Black -ForegroundColor Red
    }

    [void] ClearDNS() {
        Write-Host "==================== Log ====================" -BackgroundColor DarkYellow -ForegroundColor Black
        Write-Host "[$(Get-Date -Format 'HH:mm:ss')] Requesting access to the system..." -BackgroundColor DarkCyan -ForegroundColor White
        Set-ExecutionPolicy -ExecutionPolicy Unrestricted -Scope CurrentUser -Force -WarningAction SilentlyContinue
        Write-Host "[$(Get-Date -Format 'HH:mm:ss')] Access granted." -BackgroundColor DarkCyan -ForegroundColor White
        Write-Host "[$(Get-Date -Format 'HH:mm:ss')] Removing DNS..." -BackgroundColor DarkCyan -ForegroundColor White
        for ($i = 0; $i -le 50; $i++)
        { 
            Set-DnsClientServerAddress -InterfaceIndex $i -ResetServerAddresses -WarningAction Ignore -ErrorAction SilentlyContinue
        }
        Write-Host "[$(Get-Date -Format 'HH:mm:ss')] DNS Removed." -BackgroundColor DarkCyan -ForegroundColor White
        Write-Host "[$(Get-Date -Format 'HH:mm:ss')] Releasing access..." -BackgroundColor DarkCyan -ForegroundColor White
        Set-ExecutionPolicy -ExecutionPolicy RemoteSigned -Scope CurrentUser -Force -WarningAction SilentlyContinue
        Write-Host "[$(Get-Date -Format 'HH:mm:ss')] Access released." -BackgroundColor DarkCyan -ForegroundColor White
        Write-Host "[$(Get-Date -Format 'HH:mm:ss')] Done" -BackgroundColor White -ForegroundColor DarkGreen
    }

    [void] ClearHistory() {
        Write-Host "==================== Log ====================" -BackgroundColor DarkYellow -ForegroundColor Black
        Write-Host "[$(Get-Date -Format 'HH:mm:ss')] Requesting access to the system..." -BackgroundColor DarkCyan -ForegroundColor White
        Set-ExecutionPolicy -ExecutionPolicy Unrestricted -Scope CurrentUser -Force -WarningAction SilentlyContinue
        Write-Host "[$(Get-Date -Format 'HH:mm:ss')] Access granted." -BackgroundColor DarkCyan -ForegroundColor White
        Write-Host "[$(Get-Date -Format 'HH:mm:ss')] Clear PowerShell history..." -BackgroundColor DarkCyan -ForegroundColor White
        Remove-Item -Path "C:\Users\Windows\AppData\Roaming\Microsoft\Windows\PowerShell\PSReadLine\ConsoleHost_history.txt" -Recurse -Force -WarningAction SilentlyContinue -ErrorAction SilentlyContinue
        New-Item -Path "C:\Users\Windows\AppData\Roaming\Microsoft\Windows\PowerShell\PSReadLine\" -Name "ConsoleHost_history.txt" -ItemType File -Force -WarningAction SilentlyContinue -ErrorAction Ignore
        Import-Module PSReadline
        Write-Host "[$(Get-Date -Format 'HH:mm:ss')] PowerShell history cleared." -BackgroundColor DarkCyan -ForegroundColor White
        Write-Host "[$(Get-Date -Format 'HH:mm:ss')] Clear Windows Run history..." -BackgroundColor DarkCyan -ForegroundColor White
        Remove-Item -Path "HKCU:\SOFTWARE\Microsoft\Windows\CurrentVersion\Explorer\RunMRU" -Recurse -Force -WarningAction SilentlyContinue -ErrorAction Ignore
        Write-Host "[$(Get-Date -Format 'HH:mm:ss')] Windows Run history cleared." -BackgroundColor DarkCyan -ForegroundColor White
        Write-Host "[$(Get-Date -Format 'HH:mm:ss')] Releasing access..." -BackgroundColor DarkCyan -ForegroundColor White
        Set-ExecutionPolicy -ExecutionPolicy RemoteSigned -Scope CurrentUser -Force -WarningAction SilentlyContinue
        Write-Host "[$(Get-Date -Format 'HH:mm:ss')] Access released." -BackgroundColor DarkCyan -ForegroundColor White
        Write-Host "[$(Get-Date -Format 'HH:mm:ss')] Done" -BackgroundColor White -ForegroundColor DarkGreen
    }

    [void] HandleExit() {
        Write-Host "EEEEE	XX      XX   IIIIII   TTTTTTTTTT   IIIIII   NNNN     NN   GGGGGGGGGG" -ForegroundColor Yellow
        Write-Host "EE        XX  XX       II         TT         II     NNNNN    NN   GG" -ForegroundColor Yellow
        Write-Host "EEEEE	   XXXX        II         TT         II     NN  NN   NN   GG" -ForegroundColor Yellow
        Write-Host "EEEEE	   XXXX        II         TT         II     NN   NN  NN   GG    GGGG" -ForegroundColor Yellow
        Write-Host "EE        XX  XX       II         TT         II     NN    NN NN   GG      GG" -ForegroundColor Yellow
        Write-Host "EEEEE   XX      XX   IIIIII       TT       IIIIII   NN     NNNN   GGGGGGGGGG" -ForegroundColor Yellow
        Start-Sleep -Seconds 3
        $this.App = $false
        Exit
    }
}

$runner = [ScriptRunner]::new()
$runner.Run()
Exit