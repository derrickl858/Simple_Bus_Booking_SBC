using System.Windows.Forms;
using MySql.Data.MySqlClient;
namespace LoginPage01
{
    partial class CreateDriver
    {
        /// <summary>
        /// Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        /// Required method for Designer support - do not modify
        /// the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            System.ComponentModel.ComponentResourceManager resources = new System.ComponentModel.ComponentResourceManager(typeof(CreateDriver));
            this.submitButton = new System.Windows.Forms.Button();
            this.driverLicenseInput = new System.Windows.Forms.TextBox();
            this.label9 = new System.Windows.Forms.Label();
            this.label7 = new System.Windows.Forms.Label();
            this.label6 = new System.Windows.Forms.Label();
            this.driverPhoneInput = new System.Windows.Forms.TextBox();
            this.driverIcInput = new System.Windows.Forms.TextBox();
            this.driverNameInput = new System.Windows.Forms.TextBox();
            this.label2 = new System.Windows.Forms.Label();
            this.label1 = new System.Windows.Forms.Label();
            this.label4 = new System.Windows.Forms.Label();
            this.driverOwnerCombo = new System.Windows.Forms.ComboBox();
            this.menuStrip1 = new System.Windows.Forms.MenuStrip();
            this.homeToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
            this.manageCustomerBookingToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
            this.createBookingsToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
            this.viewEditBookingsToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
            this.externalProviderToolStrip = new System.Windows.Forms.ToolStripMenuItem();
            this.createBusToolStripMenuItem1 = new System.Windows.Forms.ToolStripMenuItem();
            this.viewEditBusToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
            this.toolStripMenuItem1 = new System.Windows.Forms.ToolStripMenuItem();
            this.toolStripMenuItem2 = new System.Windows.Forms.ToolStripMenuItem();
            this.toolStripMenuItem3 = new System.Windows.Forms.ToolStripMenuItem();
            this.manageDriverToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
            this.createBusDriverToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
            this.viewEditDriverDetailsToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
            this.createMaintenanceRecordToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
            this.maintenanceRecordToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
            this.tableLayoutPanel2 = new System.Windows.Forms.TableLayoutPanel();
            this.SBC = new System.Windows.Forms.Label();
            this.pictureBox1 = new System.Windows.Forms.PictureBox();
            this.menuStrip1.SuspendLayout();
            this.tableLayoutPanel2.SuspendLayout();
            ((System.ComponentModel.ISupportInitialize)(this.pictureBox1)).BeginInit();
            this.SuspendLayout();
            // 
            // submitButton
            // 
            this.submitButton.Location = new System.Drawing.Point(236, 307);
            this.submitButton.Margin = new System.Windows.Forms.Padding(2);
            this.submitButton.Name = "submitButton";
            this.submitButton.Size = new System.Drawing.Size(92, 19);
            this.submitButton.TabIndex = 65;
            this.submitButton.Text = "Submit";
            this.submitButton.UseVisualStyleBackColor = true;
            this.submitButton.Click += new System.EventHandler(this.button1_Click);
            // 
            // driverLicenseInput
            // 
            this.driverLicenseInput.Location = new System.Drawing.Point(124, 229);
            this.driverLicenseInput.Name = "driverLicenseInput";
            this.driverLicenseInput.Size = new System.Drawing.Size(100, 20);
            this.driverLicenseInput.TabIndex = 64;
            // 
            // label9
            // 
            this.label9.AutoSize = true;
            this.label9.Font = new System.Drawing.Font("Microsoft Sans Serif", 8.25F);
            this.label9.Location = new System.Drawing.Point(21, 232);
            this.label9.Name = "label9";
            this.label9.Size = new System.Drawing.Size(44, 13);
            this.label9.TabIndex = 63;
            this.label9.Text = "License";
            // 
            // label7
            // 
            this.label7.AutoSize = true;
            this.label7.Font = new System.Drawing.Font("Microsoft Sans Serif", 8.25F);
            this.label7.Location = new System.Drawing.Point(21, 184);
            this.label7.Name = "label7";
            this.label7.Size = new System.Drawing.Size(55, 13);
            this.label7.TabIndex = 61;
            this.label7.Text = "IC/MyKad";
            // 
            // label6
            // 
            this.label6.AutoSize = true;
            this.label6.Font = new System.Drawing.Font("Microsoft Sans Serif", 8.25F);
            this.label6.Location = new System.Drawing.Point(19, 210);
            this.label6.Name = "label6";
            this.label6.Size = new System.Drawing.Size(78, 13);
            this.label6.TabIndex = 60;
            this.label6.Text = "Phone Number";
            // 
            // driverPhoneInput
            // 
            this.driverPhoneInput.HideSelection = false;
            this.driverPhoneInput.Location = new System.Drawing.Point(124, 203);
            this.driverPhoneInput.Name = "driverPhoneInput";
            this.driverPhoneInput.Size = new System.Drawing.Size(100, 20);
            this.driverPhoneInput.TabIndex = 56;
            // 
            // driverIcInput
            // 
            this.driverIcInput.Location = new System.Drawing.Point(124, 177);
            this.driverIcInput.Name = "driverIcInput";
            this.driverIcInput.Size = new System.Drawing.Size(100, 20);
            this.driverIcInput.TabIndex = 52;
            // 
            // driverNameInput
            // 
            this.driverNameInput.Location = new System.Drawing.Point(124, 151);
            this.driverNameInput.Name = "driverNameInput";
            this.driverNameInput.Size = new System.Drawing.Size(100, 20);
            this.driverNameInput.TabIndex = 48;
            // 
            // label2
            // 
            this.label2.AutoSize = true;
            this.label2.Font = new System.Drawing.Font("Microsoft Sans Serif", 8.25F);
            this.label2.Location = new System.Drawing.Point(21, 156);
            this.label2.Name = "label2";
            this.label2.Size = new System.Drawing.Size(66, 13);
            this.label2.TabIndex = 47;
            this.label2.Text = "Driver Name";
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.Font = new System.Drawing.Font("Microsoft Sans Serif", 20.25F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label1.Location = new System.Drawing.Point(10, 101);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(189, 31);
            this.label1.TabIndex = 46;
            this.label1.Text = "Create Driver";
            // 
            // label4
            // 
            this.label4.AutoSize = true;
            this.label4.Font = new System.Drawing.Font("Microsoft Sans Serif", 8.25F);
            this.label4.Location = new System.Drawing.Point(304, 152);
            this.label4.Name = "label4";
            this.label4.Size = new System.Drawing.Size(38, 13);
            this.label4.TabIndex = 69;
            this.label4.Text = "Owner";
            // 
            // driverOwnerCombo
            // 
            this.driverOwnerCombo.DropDownStyle = System.Windows.Forms.ComboBoxStyle.DropDownList;
            this.driverOwnerCombo.FormattingEnabled = true;
            this.driverOwnerCombo.Location = new System.Drawing.Point(360, 148);
            this.driverOwnerCombo.Name = "driverOwnerCombo";
            this.driverOwnerCombo.Size = new System.Drawing.Size(100, 21);
            this.driverOwnerCombo.TabIndex = 70;
            this.driverOwnerCombo.SelectedIndexChanged += new System.EventHandler(this.comboBox1_SelectedIndexChanged);
            // 
            // menuStrip1
            // 
            this.menuStrip1.ImageScalingSize = new System.Drawing.Size(20, 20);
            this.menuStrip1.Items.AddRange(new System.Windows.Forms.ToolStripItem[] {
            this.homeToolStripMenuItem,
            this.manageCustomerBookingToolStripMenuItem,
            this.externalProviderToolStrip,
            this.toolStripMenuItem1,
            this.manageDriverToolStripMenuItem});
            this.menuStrip1.Location = new System.Drawing.Point(0, 0);
            this.menuStrip1.Name = "menuStrip1";
            this.menuStrip1.Padding = new System.Windows.Forms.Padding(4, 2, 0, 2);
            this.menuStrip1.Size = new System.Drawing.Size(532, 24);
            this.menuStrip1.TabIndex = 116;
            this.menuStrip1.Text = "menuStrip1";
            // 
            // homeToolStripMenuItem
            // 
            this.homeToolStripMenuItem.Name = "homeToolStripMenuItem";
            this.homeToolStripMenuItem.Size = new System.Drawing.Size(52, 20);
            this.homeToolStripMenuItem.Text = "Home";
            this.homeToolStripMenuItem.Click += new System.EventHandler(this.homeToolStripMenuItem_Click);
            // 
            // manageCustomerBookingToolStripMenuItem
            // 
            this.manageCustomerBookingToolStripMenuItem.DropDownItems.AddRange(new System.Windows.Forms.ToolStripItem[] {
            this.createBookingsToolStripMenuItem,
            this.viewEditBookingsToolStripMenuItem});
            this.manageCustomerBookingToolStripMenuItem.Name = "manageCustomerBookingToolStripMenuItem";
            this.manageCustomerBookingToolStripMenuItem.Size = new System.Drawing.Size(118, 20);
            this.manageCustomerBookingToolStripMenuItem.Text = "Customer Booking";
            // 
            // createBookingsToolStripMenuItem
            // 
            this.createBookingsToolStripMenuItem.Name = "createBookingsToolStripMenuItem";
            this.createBookingsToolStripMenuItem.Size = new System.Drawing.Size(171, 22);
            this.createBookingsToolStripMenuItem.Text = "Create Booking";
            this.createBookingsToolStripMenuItem.Click += new System.EventHandler(this.createBookingsToolStripMenuItem_Click_1);
            // 
            // viewEditBookingsToolStripMenuItem
            // 
            this.viewEditBookingsToolStripMenuItem.Name = "viewEditBookingsToolStripMenuItem";
            this.viewEditBookingsToolStripMenuItem.Size = new System.Drawing.Size(171, 22);
            this.viewEditBookingsToolStripMenuItem.Text = "View/Edit Booking";
            this.viewEditBookingsToolStripMenuItem.Click += new System.EventHandler(this.viewEditBookingsToolStripMenuItem_Click_1);
            // 
            // externalProviderToolStrip
            // 
            this.externalProviderToolStrip.DropDownItems.AddRange(new System.Windows.Forms.ToolStripItem[] {
            this.createBusToolStripMenuItem1,
            this.viewEditBusToolStripMenuItem});
            this.externalProviderToolStrip.Name = "externalProviderToolStrip";
            this.externalProviderToolStrip.Size = new System.Drawing.Size(166, 20);
            this.externalProviderToolStrip.Text = "External External Bus Owner";
            // 
            // createBusToolStripMenuItem1
            // 
            this.createBusToolStripMenuItem1.Name = "createBusToolStripMenuItem1";
            this.createBusToolStripMenuItem1.Size = new System.Drawing.Size(221, 22);
            this.createBusToolStripMenuItem1.Text = "Register External Bus Owner";
            this.createBusToolStripMenuItem1.Click += new System.EventHandler(this.createBusToolStripMenuItem1_Click_1);
            // 
            // viewEditBusToolStripMenuItem
            // 
            this.viewEditBusToolStripMenuItem.Name = "viewEditBusToolStripMenuItem";
            this.viewEditBusToolStripMenuItem.Size = new System.Drawing.Size(221, 22);
            this.viewEditBusToolStripMenuItem.Text = "View External Bus Owner";
            this.viewEditBusToolStripMenuItem.Click += new System.EventHandler(this.viewEditBusToolStripMenuItem_Click_1);
            // 
            // toolStripMenuItem1
            // 
            this.toolStripMenuItem1.DropDownItems.AddRange(new System.Windows.Forms.ToolStripItem[] {
            this.toolStripMenuItem2,
            this.toolStripMenuItem3});
            this.toolStripMenuItem1.Name = "toolStripMenuItem1";
            this.toolStripMenuItem1.Size = new System.Drawing.Size(50, 20);
            this.toolStripMenuItem1.Text = "Driver";
            // 
            // toolStripMenuItem2
            // 
            this.toolStripMenuItem2.Name = "toolStripMenuItem2";
            this.toolStripMenuItem2.Size = new System.Drawing.Size(158, 22);
            this.toolStripMenuItem2.Text = "Create Driver";
            this.toolStripMenuItem2.Click += new System.EventHandler(this.toolStripMenuItem2_Click_1);
            // 
            // toolStripMenuItem3
            // 
            this.toolStripMenuItem3.Name = "toolStripMenuItem3";
            this.toolStripMenuItem3.Size = new System.Drawing.Size(158, 22);
            this.toolStripMenuItem3.Text = "View/Edit Driver";
            this.toolStripMenuItem3.Click += new System.EventHandler(this.toolStripMenuItem3_Click_1);
            // 
            // manageDriverToolStripMenuItem
            // 
            this.manageDriverToolStripMenuItem.DropDownItems.AddRange(new System.Windows.Forms.ToolStripItem[] {
            this.createBusDriverToolStripMenuItem,
            this.viewEditDriverDetailsToolStripMenuItem,
            this.createMaintenanceRecordToolStripMenuItem,
            this.maintenanceRecordToolStripMenuItem});
            this.manageDriverToolStripMenuItem.Name = "manageDriverToolStripMenuItem";
            this.manageDriverToolStripMenuItem.Size = new System.Drawing.Size(38, 20);
            this.manageDriverToolStripMenuItem.Text = "Bus";
            // 
            // createBusDriverToolStripMenuItem
            // 
            this.createBusDriverToolStripMenuItem.Name = "createBusDriverToolStripMenuItem";
            this.createBusDriverToolStripMenuItem.Size = new System.Drawing.Size(183, 22);
            this.createBusDriverToolStripMenuItem.Text = "Create Bus";
            this.createBusDriverToolStripMenuItem.Click += new System.EventHandler(this.createBusDriverToolStripMenuItem_Click);
            // 
            // viewEditDriverDetailsToolStripMenuItem
            // 
            this.viewEditDriverDetailsToolStripMenuItem.Name = "viewEditDriverDetailsToolStripMenuItem";
            this.viewEditDriverDetailsToolStripMenuItem.Size = new System.Drawing.Size(183, 22);
            this.viewEditDriverDetailsToolStripMenuItem.Text = "View/Edit Bus";
            this.viewEditDriverDetailsToolStripMenuItem.Click += new System.EventHandler(this.viewEditDriverDetailsToolStripMenuItem_Click);
            // 
            // createMaintenanceRecordToolStripMenuItem
            // 
            this.createMaintenanceRecordToolStripMenuItem.Name = "createMaintenanceRecordToolStripMenuItem";
            this.createMaintenanceRecordToolStripMenuItem.Size = new System.Drawing.Size(183, 22);
            this.createMaintenanceRecordToolStripMenuItem.Text = "Mileage Record";
            this.createMaintenanceRecordToolStripMenuItem.Click += new System.EventHandler(this.createMaintenanceRecordToolStripMenuItem_Click);
            // 
            // maintenanceRecordToolStripMenuItem
            // 
            this.maintenanceRecordToolStripMenuItem.Name = "maintenanceRecordToolStripMenuItem";
            this.maintenanceRecordToolStripMenuItem.Size = new System.Drawing.Size(183, 22);
            this.maintenanceRecordToolStripMenuItem.Text = "Maintenance Record";
            this.maintenanceRecordToolStripMenuItem.Click += new System.EventHandler(this.maintenanceRecordToolStripMenuItem_Click);
            // 
            // tableLayoutPanel2
            // 
            this.tableLayoutPanel2.ColumnCount = 2;
            this.tableLayoutPanel2.ColumnStyles.Add(new System.Windows.Forms.ColumnStyle(System.Windows.Forms.SizeType.Percent, 13.40782F));
            this.tableLayoutPanel2.ColumnStyles.Add(new System.Windows.Forms.ColumnStyle(System.Windows.Forms.SizeType.Percent, 86.59218F));
            this.tableLayoutPanel2.Controls.Add(this.SBC, 1, 0);
            this.tableLayoutPanel2.Controls.Add(this.pictureBox1, 0, 0);
            this.tableLayoutPanel2.Dock = System.Windows.Forms.DockStyle.Top;
            this.tableLayoutPanel2.Location = new System.Drawing.Point(0, 24);
            this.tableLayoutPanel2.Name = "tableLayoutPanel2";
            this.tableLayoutPanel2.RowCount = 1;
            this.tableLayoutPanel2.RowStyles.Add(new System.Windows.Forms.RowStyle(System.Windows.Forms.SizeType.Percent, 92F));
            this.tableLayoutPanel2.RowStyles.Add(new System.Windows.Forms.RowStyle(System.Windows.Forms.SizeType.Absolute, 62F));
            this.tableLayoutPanel2.Size = new System.Drawing.Size(532, 62);
            this.tableLayoutPanel2.TabIndex = 117;
            // 
            // SBC
            // 
            this.SBC.Anchor = System.Windows.Forms.AnchorStyles.Left;
            this.SBC.AutoSize = true;
            this.SBC.Font = new System.Drawing.Font("Comic Sans MS", 14.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.SBC.Location = new System.Drawing.Point(73, 18);
            this.SBC.Margin = new System.Windows.Forms.Padding(2, 0, 2, 0);
            this.SBC.Name = "SBC";
            this.SBC.Size = new System.Drawing.Size(182, 26);
            this.SBC.TabIndex = 5;
            this.SBC.Text = "Shuttle Bus Central";
            this.SBC.TextAlign = System.Drawing.ContentAlignment.MiddleLeft;
            // 
            // pictureBox1
            // 
            this.pictureBox1.Image = ((System.Drawing.Image)(resources.GetObject("pictureBox1.Image")));
            this.pictureBox1.Location = new System.Drawing.Point(3, 3);
            this.pictureBox1.Name = "pictureBox1";
            this.pictureBox1.Size = new System.Drawing.Size(65, 55);
            this.pictureBox1.SizeMode = System.Windows.Forms.PictureBoxSizeMode.CenterImage;
            this.pictureBox1.TabIndex = 0;
            this.pictureBox1.TabStop = false;
            // 
            // CreateDriver
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(532, 352);
            this.Controls.Add(this.tableLayoutPanel2);
            this.Controls.Add(this.menuStrip1);
            this.Controls.Add(this.driverOwnerCombo);
            this.Controls.Add(this.label4);
            this.Controls.Add(this.submitButton);
            this.Controls.Add(this.driverLicenseInput);
            this.Controls.Add(this.label9);
            this.Controls.Add(this.label7);
            this.Controls.Add(this.label6);
            this.Controls.Add(this.driverPhoneInput);
            this.Controls.Add(this.driverIcInput);
            this.Controls.Add(this.driverNameInput);
            this.Controls.Add(this.label2);
            this.Controls.Add(this.label1);
            this.Margin = new System.Windows.Forms.Padding(2);
            this.Name = "CreateDriver";
            this.Text = "Create Driver";
            this.FormClosed += new System.Windows.Forms.FormClosedEventHandler(this.CreateDriver_FormClosed);
            this.menuStrip1.ResumeLayout(false);
            this.menuStrip1.PerformLayout();
            this.tableLayoutPanel2.ResumeLayout(false);
            this.tableLayoutPanel2.PerformLayout();
            ((System.ComponentModel.ISupportInitialize)(this.pictureBox1)).EndInit();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Button submitButton;
        private System.Windows.Forms.TextBox driverLicenseInput;
        private System.Windows.Forms.Label label9;
        private System.Windows.Forms.Label label7;
        private System.Windows.Forms.Label label6;
        private System.Windows.Forms.TextBox driverPhoneInput;
        private System.Windows.Forms.TextBox driverIcInput;
        private System.Windows.Forms.TextBox driverNameInput;
        private System.Windows.Forms.Label label2;
        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.Label label4;
        private System.Windows.Forms.ComboBox driverOwnerCombo;
        private MenuStrip menuStrip1;
        private ToolStripMenuItem homeToolStripMenuItem;
        private ToolStripMenuItem manageCustomerBookingToolStripMenuItem;
        private ToolStripMenuItem createBookingsToolStripMenuItem;
        private ToolStripMenuItem viewEditBookingsToolStripMenuItem;
        private ToolStripMenuItem externalProviderToolStrip;
        private ToolStripMenuItem createBusToolStripMenuItem1;
        private ToolStripMenuItem viewEditBusToolStripMenuItem;
        private ToolStripMenuItem toolStripMenuItem1;
        private ToolStripMenuItem toolStripMenuItem2;
        private ToolStripMenuItem toolStripMenuItem3;
        private ToolStripMenuItem manageDriverToolStripMenuItem;
        private ToolStripMenuItem createBusDriverToolStripMenuItem;
        private ToolStripMenuItem viewEditDriverDetailsToolStripMenuItem;
        private TableLayoutPanel tableLayoutPanel2;
        public Label SBC;
        private PictureBox pictureBox1;
        private ToolStripMenuItem createMaintenanceRecordToolStripMenuItem;
        private ToolStripMenuItem maintenanceRecordToolStripMenuItem;
    }
}